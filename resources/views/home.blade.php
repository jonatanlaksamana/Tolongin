@extends('layouts.app')

@section('content')
    

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
@endsection
