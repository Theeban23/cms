<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function dashboard(){
        return view('pages.dashboard', ['name' => 'CMS']);
    }
}
