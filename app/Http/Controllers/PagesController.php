<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PagesController extends Controller
{
    public function index(){
        //Tech section
        $techy = Category::where('name','Tech')->first();
        $techyId = $techy->id; 
        $tech = Post::where('category_id', $techyId)->first();
        //lifestyle section 
        $life = Category::where('name','LifeStyle')->first();
        $lifeId = $life->id; 
        $lifeStyle = Post::where('category_id', $lifeId)->first();
        
        $posts = Post::latest()->take(3)->get();
        
        return view('pages.index',compact('lifeStyle','tech','posts'));
    }

    public function read(){
        return view('pages.read');
    }
}
