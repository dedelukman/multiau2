@extends('user/user-master')

@section('user')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="middle_content_wrapper">
<div class="col-md-6">
<form method="post" action="{{route('profile.store')}}" enctype="multipart/form-data" >
@csrf
<div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" class="form-control" id="name"  name="name" placeholder="User Name"
    value="{{$user->name}}"
    >    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"
    value="{{$user->email}}"
    >    
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlFile1">Profile Image</label>
    <input type="file" class="form-control" id="image" name="profile_photo_path">
  </div>

  <div class="form-group">
  <img id="showImage" src="{{ (!empty($user->profile_photo_path))? 
    url('upload/user_images/'.$user->profile_photo_path) : url('upload/no_image.jpg') }}" 
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