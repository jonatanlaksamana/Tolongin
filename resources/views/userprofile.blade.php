
  @extends('layouts/app')

  @section('content')



<div class="container text-center">
  <h3 class="text-primary">User Profile</h3>
  <div class="row">
    <div class="col-sm-4">
      <img src="/storage/{{$user->image}}" class="img-responsive" style="width:100%" alt="Image">
      <p></p>
      <button type="button" class="btn btn-info">Ganti Profile Picture</button>
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p class="text-primary">About you</p>
       <p>{{$user->name}}</p>
      </div>
      <div class="well">
       <p class="text-primary" >Biodata</p>
        <p>Nama :  {{$user->name}}</p>
         <p>Alamat : {{$user->alamat}} </p>
          <p>No Hp : </p>
           <p>Email : {{$user->email}} </p>

      </div>
      <button type="button" class="btn btn-info">Edit Profile</button>
    </div>
  
  </div>
</div><br>


  @endsection
