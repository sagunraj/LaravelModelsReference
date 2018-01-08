@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Add New Post</h1>
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item">{{$error}}</li>
                    @endforeach
                </ul>
                <form method="POST" action="{{route('post.index')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                            <option value="0">Select a category</option>
                            @foreach($category as $categories)
                                <option value="{{$categories->id}}">{{$categories->name}}</option>
                                @endforeach
                        </select>
                        <label>Title</label>
                        <input type="text" class="form-control" name="title"/>
                        <label>Slug</label>
                        <input type="text" class="form-control" name="slug"/>
                        <label>Content</label><br/>
                        <textarea class="form-control col-xs-12" name="content"></textarea>
                    </div>
                        <input type="submit" value="Submit" class="btn btn-primary"/>
                </form>
            </div>
        </div>
    </div>
    @endsection