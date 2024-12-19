@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Profile</h1>

    <div class="row mb-4">
        <div class="col-md-3">
            <img src="../storage/app/public/profile_pics/VhPfAiHCIsEzTLq77OonHjJ7M7RnKAXFsUJqEQ6B.png" alt="Profile Picture" class="img-fluid rounded-circle" width="150">
        </div>
        <div class="col-md-9">
            <p><strong>Name:</strong></p>
            <p><strong>Email:</strong> </p>
            <!-- <p><strong>Bio:</strong></p> -->
        </div>
    </div>

    <div class="d-flex justify-content-end mb-4">
        <a href="#" id="EditBtn" class="btn btn-primary me-2">Edit Information</a>
        <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete your profile?');">
            @csrf
            <button type="submit" class="btn btn-danger me-2">Delete Profile</button>
        </form>
        <a href="/logout" class="btn btn-danger me-2">Logout</a>
    </div>

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$user_info->first_name}} {{$user_info->last_name}}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{$user_info->email}}" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input name="phone" id="phone" class="form-control" value="{{$user_info->phone_number}}" required>
        </div>

        <div class="Editprofile d-none">
            <div class="mb-3">
                <label for="profile_picture" class="form-label">Profile Picture</label>
                <input type="file" name="profile_picture" id="profile_picture" class="form-control">
            </div>

            <button type="button" id="updateBtn" class="btn btn-success ">Update Profile</button>
            <button type="button" id="updateCancelBtn" class="btn btn-danger ">Cancel</button>
        </div>
        
    </form>
</div>
@endsection
