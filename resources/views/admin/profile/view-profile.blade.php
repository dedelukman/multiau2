@extends('admin/admin-master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Claresta</a>
        <span class="breadcrumb-item active">Edit Profile</span>
      </nav>

      <div class="sl-pagebody">
<div class="col-md-6">
<form method="post" action="{{route('profile.store')}}" enctype="multipart/form-data" >
@csrf
<div class="form-group">
    <label for="exampleInputEmail1">Admin Name</label>
    <input type="text" class="form-control" id="name"  name="name" placeholder="Admin Name"
    value="{{$admin->name}}"
    >    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"
    value="{{$admin->email}}"
    >    
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlFile1">Profile Image</label>
    <input type="file" class="form-control" id="image" name="profile_photo_path">
  </div>

  <div class="form-group">
  <img id="showImage" src="{{ (!empty($admin->profile_photo_path))? 
    url('upload/admin_images/'.$admin->profile_photo_path) : url('upload/no_image.jpg') }}" 
    alt="Card image cap" style="width:100px; height:100px;">
  </div>


  
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
</div><!--/middle content wrapper-->

<script>
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection