@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    

{{$user_login}}

<form method="post" action="{{route('update' , $user_login)}}">

{{csrf_field()}}

  Nama Depan:<br>
  <input type="text" name="firstname" value="">
  <br>
  Nama Lengkap:<br>
  <input type="text" name="lastname" value="">
  <br>
  Pendidikan Terakhir:<br>
  <select name="pt">
    <option value="SMA">SMA</option>
    <option value="S1">Strata 1</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">


 
</form>


<form method="post" action="{{URL::to ('delete/' . $user_login->id )}}">

    {{csrf_field()}}
    {{method_field('delete')}}
        <input type="submit" value="Delete">
</form>
=======


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

>>>>>>> 43d9ce46d1151518e63a845e6a97219d009dbae1
@endsection
