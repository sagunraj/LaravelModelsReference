@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Add new category</h1>
            <form action="{{route('category.index')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" required/>
                </div>
                <input type="submit" value="Submit" class="btn btn-primary"/>
            </form>
        </div>
    </div>
</div>
    @endsection