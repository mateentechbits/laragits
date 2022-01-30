<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(){
        return view('contact');
    }
    public function register(){
        return view('register');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function about(){
        return view('about');
    }
}
