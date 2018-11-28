@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Writen on {{$post->created_at}}</small>
    <hr>
    <a href="/posts" class="btn btn-secondary">Go Back</a>

@endsection