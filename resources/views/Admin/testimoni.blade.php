@extends('layouts.admintemplate')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12">
                        <h2 class="title-1 m-b-25">Testimoni Table</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>isi</th>
                                    <th>date</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($testimoni as $testi)
                                <tr>
                                    <td>{{$testi->name}}</td>
                                    <td>{{$testi->isi}}</td>
                                    <td>{{$testi->created_at}}</td>
                                    <td>
                                        <form method="post" action="{{url('/admin/delete/testimoni/' . $testi->id)}}">
                                            @csrf
                                            <input  type="submit" class="btn btn-danger  btn-sm"  value="delete">
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
@endsection
