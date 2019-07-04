<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function read(){
        return view('pages.read');
    }
}
