<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\MainController;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends MainController
{
    /**
     * @param RegisterRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(RegisterRequest $request) :JsonResponse
    {
        User::query()->create([
            'user_name' => $request->get('user_name'),
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'mobile' => $request->get('mobile'),
            'password' => Hash::make($request->get('password')),
        ]);

        return $this->successResponse(
            null,
            201,
            'ثبت نام شما با موفقیت انجام شد'
        );
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request) :JsonResponse
    {
       $user = User::query()
           ->where('mobile',$request->get('mobile'))
           ->first();
       if (!$user)
           return $this->errorResponse('شماره موبایل وارد شده اشتباه است',401);

       if (!Hash::check($request->get('password'),$user->password))
           return $this->errorResponse('رمز عبور وارد شده اشتباه است ');

       $token = $user->createToken('user')->plainTextToken;

       return $this->successResponse([
           'token' => $token,
           'user' => $user->name,
           ],
       200,
       'خوش آمدید.');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function changePassword(Request $request) :JsonResponse
    {
        $validator = Validator::make(request()->all(), [
            'new_password' => 'required|min:6|confirmed',
        ]);
        if ($validator->fails())
            return $this->errorResponse($validator->errors()->first(), 422);

        $user = auth()->user();
        if (!Hash::check($request->get('password'),$user->password))
            return $this->errorResponse('رمز عبور وارد شده اشتباه است');

        $newPassword = request('new_password');

        $user->update([
            'password' => Hash::make($newPassword)
        ]);

        return $this->successResponse(
            null,
            200,
            'رمز عبور شما با موفقیت بروزرسانی شد.'
        );
    }
}
