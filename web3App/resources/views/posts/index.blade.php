@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>Posts</h1>
        </div>
        <div class="col-md-4">
            <form action="posts/search" method="get">
                <div class="input-group">
                    <input type="search" name="search" class="form-control">
                        <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </span>
                </div>
            </form>
        </div>
    </div>


    {{--<div class="row">--}}
        {{--<div class="col-md-6">--}}
        {{--<h1>Posts</h1>--}}
        {{--</div>--}}
        {{--<div class="col-md-4">--}}
                {{--<div class="input-group">--}}
                {{--<input type="search" name="search" class="form-control">--}}
                {{--</div>--}}
            {{--<a href="{{action('PostsController@search')}}">Search</a>--}}

        {{--</div>--}}
    {{--</div>--}}








    {{--{!! Form::open(['action'=>'PostsController@search', 'method'=>'POST']) !!}--}}
    {{--<div class="form-group">--}}
        {{--{{Form::label('search','Search')}}--}}
        {{--{{Form::text('search','',['class'=>'form-control','placeholder'=>'Search Term'])}}--}}
    {{--</div>--}}
    {{--{{Form::submit('Submit',['class'=>'btn btn-primary'])}}--}}
    {{--{!! Form::close() !!}--}}


    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="card">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                       <img style="width: 100%" src = "/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}"> {{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection