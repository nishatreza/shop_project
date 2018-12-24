<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        return view('frontEnd.home.home_content');
    }
    public function category() {
       return view('frontEnd.category.category_content');
    }
}
