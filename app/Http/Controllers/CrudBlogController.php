<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class CrudBlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        // return response()->json($blog);
        return view("home",compact("blogs"));
    }
    
    public function show($id)
{
    $blog = Blog::findOrFail($id); // Mencari blog berdasarkan ID
    return view('blogs.show', compact('blog'));
}

}


