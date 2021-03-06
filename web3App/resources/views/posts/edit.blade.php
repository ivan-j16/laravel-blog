@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action'=>['PostsController@update',$post->id], 'method'=>'POST','enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{-- CkEditor is from https://github.com/UniSharp/laravel-ckeditor and it is --}}
        {{-- a tool used for text editing. The script is loaded into app.blade --}}
        {{Form::textarea('body', $post->body, ['id'=>'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
    <div>
        <img src="{{ asset('storage/cover_images/' . $post->cover_image) }}" />
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-secondary'])}}
    {!! Form::close() !!}

@endsection