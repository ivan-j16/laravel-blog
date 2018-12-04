@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action'=>'PostsController@store', 'method'=>'POST','enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{-- CkEditor is from https://github.com/UniSharp/laravel-ckeditor and it is --}}
            {{-- a tool used for text editing. The script is loaded into app.blade --}}
            {{Form::textarea('body', '', ['id'=>'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-secondary'])}}
    {!! Form::close() !!}

@endsection


