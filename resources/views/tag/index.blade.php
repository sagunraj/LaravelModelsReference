@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{!! route('tag.create') !!}" class="btn btn-success">Create a new tag</a>
        @if(Session::has('tagsuccess'))
            <div class="alert alert-info">
                {!! Session::get('tagsuccess') !!}
            </div>
            @elseif(Session::has('tagupdated'))
            <div class="alert alert-info">
                {!! Session::get('tagupdated') !!}
            </div>
            @elseif(Session::has('tagdelete'))
            <div class="alert alert-info">
                {!! Session::get('tagdelete') !!}
            </div>
        @endif

        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item">{{$error}}</li>
            @endforeach
        </ul>
        <h1 class="page-header">List of all tags</h1>
    <table class="table table-bordered table-responsive">
        <thead>
        <th>Tag ID</th>
        <th>Tag Name</th>
        <th>Actions</th>
        </thead>
        <tbody>
        @foreach($tag as $tags)
        <tr>
            <td>{!! $tags -> id !!}</td>
            <td>{!! $tags -> name !!}</td>
            <td>
                <form method="POST" action="{!! route('tag.delete', $tags->id) !!}" class="form-group">
                    {{method_field('DELETE')}}
                    {{csrf_field()}}
                    <a class="btn btn-primary" href="{!! route('tag.edit', $tags->id) !!}">Edit</a>
                    <input type="submit" value="Delete" class="btn btn-danger"/>
                </form>

                {{--<a class="btn btn-danger" href="{!! route('tag.delete'), $tags->id !!}">Delete</a>--}}
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection