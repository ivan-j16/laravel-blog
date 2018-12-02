@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Writen on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    <a href="/posts" class="btn btn-secondary">Go Back</a>
    <hr>
    @if(!Auth::guest())
            @if(Auth::user()->id==$post->user_id)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
                <hr>


                {!! Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST','class' => 'float-right']) !!}

                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete',['class' => 'btn btn-danger'])}}

                {!! Form::close() !!}
            @endif
    @endif
@endsection