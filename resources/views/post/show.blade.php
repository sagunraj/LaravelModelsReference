@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {!! $post->title !!}
                </div>
                <div class="panel-body">
                    {!! $post->content !!}
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-body">
            <a href="{!! route('post.edit', $post->id) !!}" class="btn btn-primary">Edit</a><br/>
            <label>Created on: {!! $post->created_at->diffForHumans() !!}</label>
                </div>
            </div>
        </div>
    </div>

    @endsection