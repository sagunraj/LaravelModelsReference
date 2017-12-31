@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Edit category</h1>
                <form action="{{route('category.update', $category->id)}}" method="POST">
                    {{--action="/category/{{$category->id}}"--}}
                    {{method_field('PUT')}}
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$category->name}}" required/>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-primary"/>
                </form>
            </div>
        </div>
    </div>
@endsection