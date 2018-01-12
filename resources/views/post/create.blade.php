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
                        <textarea id="content" name="content"></textarea>
                    </div>
                        <input type="submit" value="Submit" class="btn btn-primary"/>
                </form>
            </div>
        </div>
    </div>
    @endsection
    @section('scripts')
        <script src="{{asset('tinymce/js/tinymce/tinymce.min.js')}}"></script>
        <script>
        tinymce.init({
            selector: 'textarea',
            height: 500,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor textcolor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code help wordcount'
            ],
            toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css']
        });
    </script>
        @endsection