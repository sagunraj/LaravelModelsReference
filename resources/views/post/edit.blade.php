@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Edit post</h1>
                <form action="{{route('post.update', $post->id)}}" method="POST">
                    {{method_field('PUT')}}
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Category ID</label>
                        <input type="text" class="form-control" name="category_id" value="{{$post->category_id}}" required/>
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" value="{{$post->title}}" required/>
                        <label>Content</label><br/>
                        <textarea class="form-control col-xs-12" name="content">{{$post->content}}</textarea>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-primary"/>
                </form>
            </div>
        </div>
    </div>
@endsection