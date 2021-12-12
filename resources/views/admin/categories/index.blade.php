@extends('layout.master')
@section('title', 'Categories List')
@section('content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="heading">
                <h2>Video Categories</h2>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('categories.create') }}" class="btn btn-warning mb-2">Add</a>
                </div>
            </div>
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)

                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>
                                <div class="d-flex">
                                    <div class="edit-button mr-4">
                                        <a href="{{ route('categories.edit', $category->id) }}"
                                            class="btn btn-primary">EDIT</a>
                                    </div>
                                    <div class="delete-button">
                                        <!-- <a href="" class="btn btn-danger">DELETE</a> -->
                                        <form method="POST" action="{{ route('categories.destroy', $category->id) }}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
