@extends('layout.master')
@section('title', 'Topics')
@section('content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="heading">
                <h2>Topics</h2>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('createTopic') }}" class="btn btn-warning mb-2">Add</a>
                </div>
            </div>
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($topics as $topic)

                        <tr>
                            <td>{{ $topic->name }}</td>
                            <td>{{ $topic->parent_category->name }}</td>
                            <td>
                                <div class="d-flex">
                                    <div class="edit-button mr-4">
                                        <a href="{{ route('topicEdit', $topic->id) }}"
                                            class="btn btn-primary">EDIT</a>
                                    </div>
                                    <div class="delete-button mr-4">
                                        <!-- <a href="" class="btn btn-danger">DELETE</a> -->
                                        <form method="POST" action="{{ route('topicDelete', $topic->id) }}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
                                    </div>
                                    <div class="delete-button">
                                        <!-- <a href="" class="btn btn-danger">DELETE</a> -->
                                        <form method="POST" action="{{ route('make.category', $topic->id) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">MAKE CATEGORY</button>
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
