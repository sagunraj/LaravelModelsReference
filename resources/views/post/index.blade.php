@extends('layouts.app')
@section('content')
    <a href="{{route('post.create')}}" class="btn btn-primary">Add New Post</a>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-responsive">
                <thead>
                <tr>
                <th>ID</th>
                <th>Category ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($post as $posts)
                <tr>
                    <td>{{$posts->id}}</td>
                    <td>{{$posts->category_id}}</td>
                    <td>{{$posts->title}}</td>
                    <td>{{$posts->content}}</td>
                    <td><a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    @endsection