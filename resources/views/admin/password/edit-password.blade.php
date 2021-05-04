@extends('admin/admin-master')

@section('admin')


<nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Claresta</a>
        <span class="breadcrumb-item active">Change Password</span>
      </nav>

      <div class="sl-pagebody">
<div class="col-md-6">
    <h4>Change Password</h4>
<form method="post" action="{{route('admin.password.update')}}" >
@csrf
<div class="form-group">
    <label for="exampleInputEmail1">Current Password</label>
    <input id="current_password" type="password" class="form-control" name="oldpassword" 
   
    >    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">New Password</label>
    <input id="password" type="password" class="form-control" name="password" 
   
    >    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Confirm Password</label>
    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" 
    
    >    
  </div> 


  
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

</div><!--/middle content wrapper-->



@endsection