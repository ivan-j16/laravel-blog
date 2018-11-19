<?php
/**
 * Created by PhpStorm.
 * User: IVAN PC
 * Date: 11/19/2018
 * Time: 5:12 PM
 */
?>


@extends('layouts.app')

@section('content')
    <h1>Contact</h1>
    {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email'])}}
    </div>
    <div class="form-group">
        {{Form::label('message', 'Message')}}
        {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter message'])}}
    </div>
    <div>
        {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
@endsection

