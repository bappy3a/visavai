<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(){}

    public function index(){
        return view('index');
    }

    public function about(){
        return view('about-us');
    }

    public function services(){
        return view('services');
    }

    public function blogs(){
        return view('blogs');
    }

    public function blogsDetails($slug){
        return view('blog-details', compact('slug'));
    }

    public function contact(){
        return view('contact');
    }

}
