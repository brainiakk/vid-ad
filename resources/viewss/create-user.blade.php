@extends('layout.master')
@section('title', 'User Management')
@section('content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="heading">
                <h2>Create User</h2>
            </div>
            <!-- @if ($errors->any()) <div class="alert alert-danger">
                    <strong>Error!</strong> 
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li></li> @endforeach
                    </ul>
                </div>
                @endif -->
            <form method="POST" action="{{ route('addUser') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="name"
                        placeholder="Enter User Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" name="email" id="email" aria-describedby="email"
                        placeholder="Enter Email Address">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" name="password" id="password" aria-describedby="emailHelp"
                        placeholder="Enter Password" required>
                </div>
                <div class="form-group">
                    <label for="sel1">User Type:</label>
                    <select class="form-control" id="sel1" name="user_type">
                        <option name="Admin" value="Admin">Admin</option>
                        <option name="Business User" value="Business User">Business User</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sel1">Status:</label>
                    <select class="form-control" id="sel1" name="is_active">
                        <option name="Owner Admin" value="0">Pending</option>
                        <option name="Customer Admin" value="1">Approved</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
