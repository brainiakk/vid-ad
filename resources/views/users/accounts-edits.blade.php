@extends('layout.master')
@section('title','User Management')
@section('content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="heading">
                <h2>Edit User</h2>
            </div>
            <form method="POST" action="/accounts-update/{{$user->id}}" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="name" value="{{$user->name}}" placeholder="Enter User Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" name="email" id="email" aria-describedby="email" value="{{$user->email}}" placeholder="Enter Email Address">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control" name="password" id="password" aria-describedby="emailHelp" placeholder="Enter Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
@endsection