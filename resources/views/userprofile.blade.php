
  @extends('layouts/app')

  @section('content')



<div class="container text-center">
  <h3 class="text-primary">User Profile</h3>
  <div class="row">
    <div class="col-sm-4">
      <img src="/storage/{{$user->image}}" class="img-responsive" style="width:100%" alt="Image">
      <p></p>
      <p class="text-primary">Ganti Photo Profile</p>
      <form action="{{route('updateFoto')}}" method="post" enctype='multipart/form-data'>
      @csrf
            <input placeholder="Ganti Profile" type="file" name="gantifoto" accept="image/*">
            <input type="submit" class="btn btn-primary-outline"  value="submit"">
      </form>


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
      <div class="text-center">
        <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">
     Edit profile</a>
    </div>



    <!-- ini modal -->
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit Profile</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
    <form method="post" action="{{route('update')}}"> 
               @csrf
      
      <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="name" name="nama" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Nama</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="alamat" name="alamat" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-alamat">Alamat</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="nohp" name="nohp" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-nohp">NoHp</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="orangeForm-email" name="email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" name="pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-deep-orange">Submit</button>
      </div>
      
      </form>
    
    </div>
  </div>
</div>



  </div>
</div><br>


  @endsection
