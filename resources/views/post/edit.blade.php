@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Edit post</h1>
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item">{{$error}}</li>
                    @endforeach
                </ul>
                <form action="{{route('post.update', $post->id)}}" method="POST">
                    {{method_field('PUT')}}
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Category ID</label>
                        <select class="form-control" name="category_id">
                            <option value="0">Select a category</option>
                                @foreach($category as $categories)
                                    @if($categories->id==$post->category_id)
                                        <option value="{{$categories->id}}" selected>{{$categories->name}}</option>
                                    @else
                                        <option value="{{$categories->id}}">{{$categories->name}}</option>
                                @endif
                                        @endforeach
                        </select>
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" value="{{$post->title}}" required/>
                        <label>Slug</label>
                        <input type="text" class="form-control" name="slug" value="{{$post->slug}}" required/>
                        <label>Content</label><br/>
                        <textarea class="form-control col-xs-12" name="content">{{$post->content}}</textarea>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-primary"/>
                </form>
            </div>
        </div>
    </div>
@endsection