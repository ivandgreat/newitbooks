<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index(){
      $blogs = Blog::latest()->get();
      return view('blog.index', compact('blogs'));
    }

    public function create(){
      return view('blog.create');
    }

    public function store(Request $request){
      $input = $request->all();
      Blog::create($input);
      return back();


    }
    public function show($id){
      $blog = Blog::findOrFail($id);

      // var_dump($blog);  // to show the object
      return view('blog.show', compact('blog'));
    }
}
