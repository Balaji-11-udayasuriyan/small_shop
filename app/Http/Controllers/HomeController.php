<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('home');

    } 

    // public function privacy(){

    //     return view('Privacy');
    // }

    // public function cookie(){

    //     return view('Cookie');
    // }

    // public function login(){

    //     return view('Login');
    // }

    // public function register(){

    //     return view('Register');
    // }
}
