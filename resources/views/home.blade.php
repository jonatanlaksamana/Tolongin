@extends('layouts.app')

@section('content')

<div class="container">
    <form method="post" action="{{route('update' , $user_login)}}">
    @csrf
    First name:<br>
  <input type="text" name="firstname" >
  <br>
  Last name:<br>
  <input type="text" name="lastname" >
  <br>
  Lulusan terakhir:<br>
  <input type="radio" name="lul" value="SMA" checked> SMA<br>
  <input type="radio" name="lul" value="S1"> S1<br>
  <input type="radio" name="lul" value="S2"> S2
  <br><br>
  <input type="submit" value="Submit">
    </form>
</div>

<form method="post" action="{{URL::to('delete/'. $user_login->id)}}">
    @csrf
    {{ method_field('DELETE') }}
    <input type=submit value="delete">

</form>

<form method="post" action="{{route('erase', $user_login)}}">
@csrf
<input type="submit" value="submit">
</form>
@endsection
