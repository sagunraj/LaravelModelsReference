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
                    <td>{{$posts->category->name}}</td>
                    <td>{{$posts->title}}</td>
                    <td>{{$posts->content}}</td>
                    <td>
                        <form method="POST" action="{{route('post.delete',$posts->id)}}">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            <a href="{{ route('post.edit', $posts->id) }}" class="btn btn-primary">Edit</a>
                            <input type="submit" value="Delete" class="btn btn-danger"/>

                    </form>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    @endsection