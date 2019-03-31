@extends('layouts.admintemplate')

@section('content')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview </h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div>
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
                                                <h2>{{count($Order)}}</h2>
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
                                                  @foreach($joinTable as $row)
                                                        {{$row->harga}}

                                                  @endforeach
                                                </h2>
                                                <span>total earnings</span>
                                            </div>
                                        </div>

                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">recent reports</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                                <div class="chart-note">
                                                    <span class="dot dot--blue"></span>
                                                    <span>pemakai jasa</span>
                                                </div>
                                                <div class="chart-note mr-0">
                                                    <span class="dot dot--green"></span>
                                                    <span>Penyedia jasa</span>
                                                </div>
                                            </div>
                                            <div class="chart-info__right">
                                                <div class="chart-statis">
                                                    <span class="index incre">
                                                        <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                                    <span class="label">Pemakaijasa</span>
                                                </div>
                                                <div class="chart-statis mr-0">
                                                    <span class="index decre">
                                                        <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                                    <span class="label">Penyedia jasa</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recent-report__chart">
                                            <canvas id="recent-rep-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">char by %</h3>
                                        <div class="row no-gutters">
                                            <div class="col-xl-6">
                                                <div class="chart-note-wrap">
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--blue"></span>
                                                        <span>Penyedia jasa</span>
                                                    </div>
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--red"></span>
                                                        <span>Pemakai jasa</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="percent-chart">
                                                    <canvas id="percent-chart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
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
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>000001</td>
                                                <td>Pijat ++ JOJO</td>
                                                  <th>Jojo ganteng</th>
                                                <td class="text-right">Rp 10.000</td>
                                                <td class="text-right">Rp 10.000</td>
                                            </tr>
                                            <!-- <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>000001</td>
                                                <td>Pijat ++ JOJO</td>
                                                  <th>Jojo ganteng</th>
                                                <td class="text-right">Rp 10.000</td>
                                                <td class="text-right">Rp 10.000</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>000001</td>
                                                <td>Pijat ++ JOJO</td>
                                                  <th>Jojo ganteng</th>
                                                <td class="text-right">Rp 10.000</td>
                                                <td class="text-right">Rp 10.000</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>000001</td>
                                                <td>Pijat ++ JOJO</td>
                                                  <th>Jojo ganteng</th>
                                                <td class="text-right">Rp 10.000</td>
                                                <td class="text-right">Rp 10.000</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>000001</td>
                                                <td>Pijat ++ JOJO</td>
                                                  <th>Jojo ganteng</th>
                                                <td class="text-right">Rp 10.000</td>
                                                <td class="text-right">Rp 10.000</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>000001</td>
                                                <td>Pijat ++ JOJO</td>
                                                  <th>Jojo ganteng</th>
                                                <td class="text-right">Rp 10.000</td>
                                                <td class="text-right">Rp 10.000</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>000001</td>
                                                <td>Pijat ++ JOJO</td>
                                                  <th>Jojo ganteng</th>
                                                <td class="text-right">Rp 10.000</td>
                                                <td class="text-right">Rp 10.000</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>000001</td>
                                                <td>Pijat ++ JOJO</td>
                                                  <th>Jojo ganteng</th>
                                                <td class="text-right">Rp 10.000</td>
                                                <td class="text-right">Rp 10.000</td>
                                            </tr> -->


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-3">
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
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                          <!-- INI TNGGAL SKRG YA BOI -->
                                            <i class="zmdi zmdi-account-calendar"></i>Hari ini-Bulan ini-Tahun ini</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <p>Tasks for Jaki</p>
                                        </div>
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Kerjain Pro IF qontol</a>
                                                    </h5>
                                                    <span class="time">10:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">SV anjink</a>
                                                    </h5>
                                                    <span class="time">11:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--primary">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Tidur siang</a>
                                                    </h5>
                                                    <span class="time">02:00 PM</span>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="au-task__footer">
                                            <button class="au-btn au-btn-load js-load-btn">load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-comment-text"></i>New Messages</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-inbox-wrap js-inbox-wrap">
                                        <div class="au-message js-list-load">
                                            <div class="au-message__noti">
                                                <p>You Have

                                                    //count
                                                    <span>{{count($chats)}}</span>

                                                    new messages
                                                </p>
                                            </div>
                                            <div class="au-message-list">
                                                <div class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="images/icon/2.jpg" alt="Jaki2">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">{{$joinTable1->name}}</h5>
                                                                <p>{{$joinTable1->isi}}</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>{{$joinTable1->created_at}}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="images/icon/3.jpg" alt="jaki3">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Jaki juga</h5>
                                                                <p>Ayuk makan daging anjing dengan sayur kol!</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>11:00 PM</span>
                                                        </div>
                                                    </div>
                                                </div>




                                            </div>
                                            <div class="au-message__footer">
                                                <button class="au-btn au-btn-load js-load-btn">load more</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
