<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function About(){
        return view('pages.about');
    }
    public function homegallery(){
        return view('pages.homegallery');
    }
    public function bootstrap1(){
        return view('pages.bootstrap1');
    }
    public function bootstrap2(){
        return view('pages.bootstrap2');
    }
    public function bootstrap3(){
        return view('pages.bootstrap3');
    }
    public function bootstrap4(){
        return view('pages.bootstrap4');
    }
    public function bootstrap5(){
        return view('pages.bootstrap5');
    }
}