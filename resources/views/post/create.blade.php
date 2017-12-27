@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{route('post.index')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Category ID</label>
                        <input type="text" class="form-control" name="category_id"/>
                        <label>Title</label>
                        <input type="text" class="form-control" name="title"/>
                        <label>Content</label><br/>
                        <textarea class="form-control col-xs-12" name="content"></textarea>
                    </div>
                        <input type="submit" value="Submit" class="btn btn-primary"/>
                </form>
            </div>
        </div>
    </div>
    @endsection