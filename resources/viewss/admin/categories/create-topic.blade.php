@extends('layout.master')
@section('title', 'Add Topic')
@section('content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="heading">
                <h2>Create Topic</h2>
            </div>

            <form method="POST" action="{{ route('saveTopic') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Topic Name</label>
                    <input type="text" class="form-control" required name="name" id="name" aria-describedby="name"
                        placeholder="Enter Topic Name">
                </div>
                <div class="form-group">
                    <label for="sel1">Category:</label>
                    <select class="form-control" id="sel1" required name="parent_id">

                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach

                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
