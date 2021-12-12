@extends('layout.master')
@section('title', 'User Management')
@section('content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="heading">
                <h2>Edit Video Category <sub>{{ $category->name }}</sub></h2>
            </div>

            <form method="POST" action="{{ route('categories.update', $category) }}">

                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" class="form-control" value="{{ $category->name }}" name="name" id="name"
                        aria-describedby="name" placeholder="Enter Category Name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
