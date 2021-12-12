@extends('layout.master')
@section('title', 'User Management')
@section('content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="heading">
                <h2>Create Video Category</h2>
            </div>

            <form method="POST" action="{{ route('categories.store') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="name"
                        placeholder="Enter Category Name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
