<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogs_index()
    {
        return view('admin.blog.blog-manage');
    }

    public function blog_create()
    {
        return view('admin.blog.blog-add');
    }




    
}
