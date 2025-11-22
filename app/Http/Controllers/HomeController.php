<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home');
    }
    public function medecin()
    {
        return view('home.medecin');
    }
    public function news()
    {
        return view('home.news');  
    }     
    public function blog()
    {
        return view('home.blog');  
    }     
    public function apropos()
    {
        return view('home.apropos');
    }
    public function service()
    {
        return view('home.service');
    }
    public function dashboard()
    {
        return view('home.dashboard');
    }
}
