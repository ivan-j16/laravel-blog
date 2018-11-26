<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//We use pages controller to return pages based on the method, because we do not want to overload the routes file.
class PagesController extends Controller
{
    public function getHome(){
        return view('home');
    }
    public function getAbout(){
        return view('about');
    }
    public function getContact(){
        return view('contact');
    }
}
