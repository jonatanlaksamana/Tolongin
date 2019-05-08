@if ($message = Session::get('success'))
    <div style="z-index:20 ; padding-bottom: 50px "class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif