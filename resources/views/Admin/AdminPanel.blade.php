@extends('layouts.admintemplate')

@section('content')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">

                                              <!-- Jumlah member boi -->
                                                <h2>{{count($User)}}</h2>
                                                <span>Jumlah Member</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                              <!-- JASA YANG TERPAKAI  -->
                                                <h2>{{count($orders)}}</h2>
                                                <span>Jasa yang terpakai</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>
                                                        {{$total}}
                                                </h2>
                                                <span>total earnings</span>
                                            </div>
                                        </div>

                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Jasa yang dipakai</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>date</th>  
                                                <th>order ID</th>
                                                <th>Nama jasa</th>
                                                  <th>Penyedia Jasa</th>
                                                <th class="text-right">price</th>
                                                <th class="text-right">total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $order)
                                            <tr>
                                                <td>{{$order->created_at}}</td>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->jasaName}}</td>
                                                  <th>{{$order->name}}</th>
                                                <td class="text-right">{{$order->harga}}</td>
                                                <td class="text-right">Rp 10.000</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Jasa Populer </h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td>Pijat Jojo</td>
                                                        <td class="text-right">Rp 10.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pijat Jaki</td>
                                                        <td class="text-right">Rp 2.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chris terima mandiin anjing</td>
                                                        <td class="text-right">Rp 10.000</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
