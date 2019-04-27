
@extends('layouts.admintemplate')

@section('content')

    <div class="page-wrapper">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">

                              <div class="col-lg-12">
                                  <h2 class="title-1 m-b-25">Users</h2>
                                  <div class="table-responsive table--no-card m-b-40">
                                      <table class="table table-borderless table-striped table-earning">
                                          <thead>
                                              <tr>
                                                  <th> id</th>
                                                  <th>Name</th>
                                                  <th>Email</th>
                                                  <th>Member</th>
                                                  <th>Action</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <th>{{$user->email}}</th>
                                                    <td>{{$user->member}}</td>
                                                    <td><button class="btn btn-success bnt-sm">Change Privilage</button></td>
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
