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

    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque expedita fuga mollitia perferendis sint? Ad architecto asperiores consequatur culpa cupiditate dolorum facere, hic libero nesciunt non provident qui repudiandae rerum.</p>

@endsection

@section ('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection
