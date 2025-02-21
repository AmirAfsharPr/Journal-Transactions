@extends('App.Layout.master')

@section('content')

    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-md-flex justify-content-between align-items-center d-inline-block row">
                                    <div class="col-xl-3 col-md-6 col-12 my-2">
                                        <p class="mb-5 text-fade">Final Balance</p>
                                        <h4 class="mb-0"><span class="ms-5">$55.00</span></h4>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-12 my-2">
                                        <p class="mb-5 text-fade">loss this month/profit for this month</p>
                                        <h4 class="mb-0"><span class="text-success d-block text-center">+5.00$</span> </h4>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-12 my-2">
                                        <p class="mb-5 text-fade">Decrease in total savings/Increase in total savings </p>
                                        <h4 class="mb-0"><span class="text-success d-block text-center">+10%</span></h4>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-12 my-2">
                                        <p class="mb-5 text-fade">Starting Balance</p>
                                        <h4 class="mb-0"><span class="text-dark">$50.00</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Wallet Balance</h4>
                            </div>
                            <div class="box-body">
                                <div class="chart">
                                    <div id="chartdiv30" class="h-600"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="box">
                                    <div class="box-header with-border">
                                        <h4 class="box-title">Buy BCN</h4>
                                    </div>
                                    <div class="box-body">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#market" role="tab">Market</a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#limit" role="tab">Limit</a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#stop" role="tab">Stop</a> </li>
                                        </ul>
                                        <div class="tab-content p-10 tabcontent-border">
                                            <div class="tab-pane active" id="market" role="tabpanel">
                                                <form class="dash-form">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Good-Til-Canceled</option>
                                                            <option>option 2</option>
                                                            <option>option 3</option>
                                                            <option>option 4</option>
                                                            <option>option 5</option>
                                                        </select>
                                                    </div>
                                                    <p>Balance: <span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    <p>Best ask: <span class="fw-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
                                                    <div class="input-group mb-10">
                                                        <span class="input-group-addon">Amount</span>
                                                        <input type="number" class="form-control" placeholder="0">
                                                    </div>
                                                    <div class="input-group mb-10">
                                                        <span class="input-group-addon">Price</span>
                                                        <input type="number" class="form-control" placeholder="Bitcoin per 1">
                                                    </div>
                                                    <div class="input-group mb-50">
                                                        <span class="input-group-addon">Total</span>
                                                        <input type="text" class="form-control" placeholder="Bitcoin">
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-5">Fee: 0.1% </p>
                                                        <p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-5">Rebate: 0.01% </p>
                                                        <p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-5">Reserved </p>
                                                        <p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    </div>
                                                    <button type="submit" class="btn btn-block btn-success mt-20">Buy Limit</button>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="limit" role="tabpanel">
                                                <form class="dash-form">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Good-Til-Canceled</option>
                                                            <option>option 2</option>
                                                            <option>option 3</option>
                                                            <option>option 4</option>
                                                            <option>option 5</option>
                                                        </select>
                                                    </div>
                                                    <p>Balance: <span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    <p>Best ask: <span class="fw-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
                                                    <div class="input-group mb-10">
                                                        <span class="input-group-addon">Amount</span>
                                                        <input type="number" class="form-control" placeholder="0">
                                                    </div>
                                                    <div class="input-group mb-10">
                                                        <span class="input-group-addon">Price</span>
                                                        <input type="number" class="form-control" placeholder="Bitcoin per 1">
                                                    </div>
                                                    <div class="input-group mb-50">
                                                        <span class="input-group-addon">Total</span>
                                                        <input type="text" class="form-control" placeholder="Bitcoin">
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-5">Fee: 0.1% </p>
                                                        <p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-5">Rebate: 0.01% </p>
                                                        <p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-5">Reserved </p>
                                                        <p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    </div>
                                                    <button type="submit" class="btn btn-block btn-success mt-20">Buy Limit</button>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="stop" role="tabpanel">
                                                <form class="dash-form">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Good-Til-Canceled</option>
                                                            <option>option 2</option>
                                                            <option>option 3</option>
                                                            <option>option 4</option>
                                                            <option>option 5</option>
                                                        </select>
                                                    </div>
                                                    <p>Balance: <span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    <p>Best ask: <span class="fw-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
                                                    <div class="input-group mb-10">
                                                        <span class="input-group-addon">Amount</span>
                                                        <input type="number" class="form-control" placeholder="0">
                                                    </div>
                                                    <div class="input-group mb-10">
                                                        <span class="input-group-addon">Price</span>
                                                        <input type="number" class="form-control" placeholder="Bitcoin per 1">
                                                    </div>
                                                    <div class="input-group mb-50">
                                                        <span class="input-group-addon">Total</span>
                                                        <input type="text" class="form-control" placeholder="Bitcoin">
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-5">Fee: 0.1% </p>
                                                        <p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-5">Rebate: 0.01% </p>
                                                        <p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-5">Reserved </p>
                                                        <p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    </div>
                                                    <button type="submit" class="btn btn-block btn-success mt-20">Buy Limit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="box">
                                    <div class="box-header with-border">
                                        <h4 class="box-title">Sell BCN</h4>
                                    </div>
                                    <div class="box-body">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#market-sell" role="tab">Market</a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#limit-sell" role="tab">Limit</a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#stop-sell" role="tab">Stop</a> </li>
                                        </ul>
                                        <div class="tab-content p-10 tabcontent-border">
                                            <div class="tab-pane active" id="market-sell" role="tabpanel">
                                                <form class="dash-form">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Good-Til-Canceled</option>
                                                            <option>option 2</option>
                                                            <option>option 3</option>
                                                            <option>option 4</option>
                                                            <option>option 5</option>
                                                        </select>
                                                    </div>
                                                    <p>Balance: <span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    <p>Best ask: <span class="fw-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
                                                    <div class="input-group mb-10">
                                                        <span class="input-group-addon">Amount</span>
                                                        <input type="number" class="form-control" placeholder="0">
                                                    </div>
                                                    <div class="input-group mb-10">
                                                        <span class="input-group-addon">Price</span>
                                                        <input type="number" class="form-control" placeholder="Bitcoin per 1">
                                                    </div>
                                                    <div class="input-group mb-50">
                                                        <span class="input-group-addon">Total</span>
                                                        <input type="text" class="form-control" placeholder="Bitcoin">
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-5">Fee: 0.1% </p>
                                                        <p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-5">Rebate: 0.01% </p>
                                                        <p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-5">Reserved </p>
                                                        <p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    </div>
                                                    <button type="submit" class="btn btn-block btn-danger mt-20">Sell Limit</button>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="limit-sell" role="tabpanel">
                                                <form class="dash-form">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Good-Til-Canceled</option>
                                                            <option>option 2</option>
                                                            <option>option 3</option>
                                                            <option>option 4</option>
                                                            <option>option 5</option>
                                                        </select>
                                                    </div>
                                                    <p>Balance: <span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    <p>Best ask: <span class="fw-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
                                                    <div class="input-group mb-10">
                                                        <span class="input-group-addon">Amount</span>
                                                        <input type="number" class="form-control" placeholder="0">
                                                    </div>
                                                    <div class="input-group mb-10">
                                                        <span class="input-group-addon">Price</span>
                                                        <input type="number" class="form-control" placeholder="Bitcoin per 1">
                                                    </div>
                                                    <div class="input-group mb-50">
                                                        <span class="input-group-addon">Total</span>
                                                        <input type="text" class="form-control" placeholder="Bitcoin">
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-5">Fee: 0.1% </p>
                                                        <p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-5">Rebate: 0.01% </p>
                                                        <p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-5">Reserved </p>
                                                        <p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    </div>
                                                    <button type="submit" class="btn btn-block btn-danger mt-20">Sell Limit</button>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="stop-sell" role="tabpanel">
                                                <form class="dash-form">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Good-Til-Canceled</option>
                                                            <option>option 2</option>
                                                            <option>option 3</option>
                                                            <option>option 4</option>
                                                            <option>option 5</option>
                                                        </select>
                                                    </div>
                                                    <p>Balance: <span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    <p>Best ask: <span class="fw-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
                                                    <div class="input-group mb-10">
                                                        <span class="input-group-addon">Amount</span>
                                                        <input type="number" class="form-control" placeholder="0">
                                                    </div>
                                                    <div class="input-group mb-10">
                                                        <span class="input-group-addon">Price</span>
                                                        <input type="number" class="form-control" placeholder="Bitcoin per 1">
                                                    </div>
                                                    <div class="input-group mb-50">
                                                        <span class="input-group-addon">Total</span>
                                                        <input type="text" class="form-control" placeholder="Bitcoin">
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-5">Fee: 0.1% </p>
                                                        <p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-5">Rebate: 0.01% </p>
                                                        <p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-5">Reserved </p>
                                                        <p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
                                                    </div>
                                                    <button type="submit" class="btn btn-block btn-danger mt-20">Sell Limit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Last Positions</h4>
                            </div>
                            <div class="box-body p-10">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-striped table-bordered no-margin">
                                        <thead>
                                        <tr>
                                            <th>Symbol</th>
                                            <th>Change</th>
                                            <th>Margin</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><p class="fs-18 no-margin">AGBUR</p></td>
                                            <td><p class="no-margin text-success">2.50 (5.00%)</p></td>
                                            <td class="no-wrap">$50 (5x)</td>
                                        </tr>
                                        <tr>
                                            <td><p class="fs-18 no-margin">INVHTR</p></td>
                                            <td><p class="no-margin text-success">0.04 (2.50%)</p></td>
                                            <td class="no-wrap">215.25</td>
                                        </tr>
                                        <tr>
                                            <td><p class="fs-18 no-margin">MJHYR</p> </td>
                                            <td><p class="no-margin text-danger">-0.3 (-1.5%)</p></td>
                                            <td class="no-wrap">487.25</td>
                                        </tr>
                                        <tr>
                                            <td><p class="fs-18 no-margin">POLRT</p></td>
                                            <td><p class="no-margin text-danger">-0.8 (-0.5%)</p></td>
                                            <td class="no-wrap">85.25</td>
                                        </tr>
                                        <tr>
                                            <td><p class="fs-18 no-margin">UAREF</p></td>
                                            <td><p class="no-margin text-success">0.89 (2.50%)</p></td>
                                            <td class="no-wrap">215.25</td>
                                        </tr>
                                        <tr>
                                            <td><p class="fs-18 no-margin">IOPE</p></td>
                                            <td><p class="no-margin text-danger">-2.4 (-9.5%)</p></td>
                                            <td class="no-wrap">958.25</td>
                                        </tr>
                                        <tr>
                                            <td><p class="fs-18 no-margin">GFTRE</p></td>
                                            <td><p class="no-margin text-success">0.04 (2.50%)</p></td>
                                            <td class="no-wrap">5189.25</td>
                                        </tr>
                                        <tr>
                                            <td><p class="fs-18 no-margin">IOPUY</p></td>
                                            <td><p class="no-margin text-success">0.04 (2.50%)</p></td>
                                            <td class="no-wrap">215.25</td>
                                        </tr>
                                        <tr>
                                            <td><p class="fs-18 no-margin">QWERD</p> </td>
                                            <td><p class="no-margin text-danger">-0.3 (-1.5%)</p></td>
                                            <td class="no-wrap">487.25</td>
                                        </tr>
                                        <tr>
                                            <td><p class="fs-18 no-margin">MNJHY</p></td>
                                            <td><p class="no-margin text-danger">-0.8 (-0.5%)</p></td>
                                            <td class="no-wrap">85.25</td>
                                        </tr>
                                        <tr>
                                            <td><p class="fs-18 no-margin">DCFRE</p></td>
                                            <td><p class="no-margin text-success">0.89 (2.50%)</p></td>
                                            <td class="no-wrap">215.25</td>
                                        </tr>
                                        <tr>
                                            <td><p class="fs-18 no-margin">MNJHY</p></td>
                                            <td><p class="no-margin text-danger">-2.4 (-9.5%)</p></td>
                                            <td class="no-wrap">958.25</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Watch List</h4>
                                <ul class="box-controls pull-right">
                                    <li><a class="box-btn-close" href="#"></a></li>
                                    <li><a class="box-btn-slide" href="#"></a></li>
                                    <li><a class="box-btn-fullscreen" href="#"></a></li>
                                </ul>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-10">
                                        <thead>
                                        <tr>
                                            <th>Symbol</th>
                                            <th>Last</th>
                                            <th>Chg</th>
                                            <th>%Chg</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>ABHRT</td>
                                            <td>158.25</td>
                                            <td><span class="text-success">0.21 <i class="fa fa-caret-up"></i></span></td>
                                            <td><span class="text-success">1.01 <i class="fa fa-caret-up"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>HNFY</td>
                                            <td>3258.25</td>
                                            <td><span class="text-success">89.21 <i class="fa fa-caret-up"></i></span></td>
                                            <td><span class="text-success">12.01 <i class="fa fa-caret-up"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>OLPRT</td>
                                            <td>326.25</td>
                                            <td><span class="text-danger">-18.21 <i class="fa fa-caret-down"></i></span></td>
                                            <td><span class="text-danger">-1.01 <i class="fa fa-caret-down"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>NMVYT</td>
                                            <td>859.25</td>
                                            <td><span class="text-danger">-40.21 <i class="fa fa-caret-down"></i></span></td>
                                            <td><span class="text-danger">-5.01 <i class="fa fa-caret-down"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>BCGDTR</td>
                                            <td>25.25</td>
                                            <td><span class="text-success">5.21 <i class="fa fa-caret-up"></i></span></td>
                                            <td><span class="text-success">0.81 <i class="fa fa-caret-up"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>PAOUR</td>
                                            <td>8548.25</td>
                                            <td><span class="text-success">852.21 <i class="fa fa-caret-up"></i></span></td>
                                            <td><span class="text-success">5.01 <i class="fa fa-caret-up"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>NVMHFY</td>
                                            <td>58.25</td>
                                            <td><span class="text-danger">-7.21 <i class="fa fa-caret-down"></i></span></td>
                                            <td><span class="text-danger">-.71 <i class="fa fa-caret-down"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>QWTSR</td>
                                            <td>228.25</td>
                                            <td><span class="text-success">85.21 <i class="fa fa-caret-up"></i></span></td>
                                            <td><span class="text-success">2.01 <i class="fa fa-caret-up"></i></span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Live Trafic</h4>
                                <ul class="box-controls pull-right">
                                    <li><a class="box-btn-close" href="#"></a></li>
                                    <li><a class="box-btn-slide" href="#"></a></li>
                                    <li><a class="box-btn-fullscreen" href="#"></a></li>
                                </ul>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="chart">
                                    <div id="chartdiv31" class="h-300"></div>
                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Trafic Flow</h4>
                                <ul class="box-controls pull-right">
                                    <li><a class="box-btn-close" href="#"></a></li>
                                    <li><a class="box-btn-slide" href="#"></a></li>
                                    <li><a class="box-btn-fullscreen" href="#"></a></li>
                                </ul>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div id="interactive" class="h-300"></div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Daly Analysis</h4>

                                <ul class="box-controls pull-right">
                                    <li><a class="box-btn-close" href="#"></a></li>
                                    <li><a class="box-btn-slide" href="#"></a></li>
                                    <li><a class="box-btn-fullscreen" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="box-body">
                                <div class="chart">
                                    <div id="e_chart_2" class="h-300"></div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection

