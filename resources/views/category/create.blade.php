@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Add new category</h1>
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item">{{$error}}</li>
                @endforeach
            </ul>
            <form action="{{route('category.index')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name"/>
                </div>
                <input type="submit" value="Submit" class="btn btn-primary"/>
            </form>
        </div>
    </div>
</div>
    @endsection