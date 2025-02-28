<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\MainController;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\ResetPasswordMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Testing\Fluent\Concerns\Has;

class AuthController extends MainController
{
    /**
     * @param RegisterRequest $request
     * @return JsonResponse
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
           return $this->errorResponse('شماره موبایل وارد شده نامعتبر است',401);

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

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function forgetPassword(Request $request): JsonResponse
    {
        $validator = Validator::make(request()->all(), [
            'email' => 'required|email|exists:users,email',
        ]);
        if ($validator->fails())
            return $this->errorResponse($validator->errors()->first(), 422);

        $email = $request->get('email');
        $token = Str::random(60);

        DB::table('password_reset_tokens')->where('email',$email)->delete();
        DB::table('password_reset_tokens')->insert([
            'email' => $email,
            'token' => Hash::make($token),
            'created_at' => Carbon::now()
        ]);
        $data = [
            'token' => $token,
            'email' => $email
        ];
        Mail::to($email)->send(new ResetPasswordMail($data));

        return $this->successResponse(
            data: null,
            code: 200,
            message: 'کد تایید برای ایمیل ' . $email . 'ارسال شد.'
        );
    }

    /**
     * @return JsonResponse
     */
    public function resetPassword() :JsonResponse
    {
        $validator = Validator::make(request()->all(), [
            'email' => 'required|email|exists:users,email',
            'token' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails())
            return $this->errorResponse($validator->errors()->first(), 422);

        $record = DB::table('password_reset_tokens')
            ->where('email', request('email'))
            ->first();

        if (!$record || !Hash::check(request('token'), $record->token))
            return $this->errorResponse('توکن نامعتبر است', 422);

        $user = User::query()->where('email', request('email'))->first();
        $user->password = Hash::make(request('password'));
        $user->save();

        DB::table('password_reset_tokens')->where('email', request('email'))->delete();

        return $this->successResponse(
            data: null,
            code: 200,
            message: 'رمز عبور شما با موفقیت تغییر یافت.'
        );

    }
}
