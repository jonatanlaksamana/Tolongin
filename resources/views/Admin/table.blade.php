
@extends('layouts.admintemplate')

@section('content')

    <div class="page-wrapper">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">

                              <div class="col-lg-12">
                                  <h2 class="title-1 m-b-25">Jasa yang Belum di Aprove</h2>
                                  <div class="table-responsive table--no-card m-b-40">
                                      <table class="table table-borderless table-striped table-earning">
                                          <thead>
                                              <tr>
                                                  <th>order ID</th>
                                                  <th>Nama jasa</th>
                                                  <th>Penyedia Jasa</th>
                                                  <th>price</th>
                                                  <th>Action</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            @foreach($orders as $order)
                                                <tr>
                                                    <td>{{$order->id}}</td>
                                                    <td>{{$order->jasaName}}</td>
                                                    <th>{{$order->name}}</th>
                                                    <td>{{$order->harga}}</td>
                                                    <td>
                                                        <form  method="post" action="{{url('/delete/order/' . $order->id . '')}}">
                                                            @csrf
                                                            <button class="btn btn-danger btn-sm">Delete</button>
                                                        </form>

                                                    </td>
                                                </tr>
                                            @endforeach
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Jasa yang Sudah di Aprove</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                        <tr>
                                            <th>order ID</th>
                                            <th>Nama jasa</th>
                                            <th>Penyedia Jasa</th>
                                            <th>price</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($ordersAcc as $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->jasaName}}</td>
                                                <th>{{$order->name}}</th>
                                                <td>{{$order->harga}}</td>
                                                <td>
                                                    <form  method="post" action="{{url('/delete/order/' . $order->id . '')}}">
                                                        @csrf
                                                        <button class="btn btn-danger btn-sm">Delete</button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
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



<!-- end document-->
  @endsection
