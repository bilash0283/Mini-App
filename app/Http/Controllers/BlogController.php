<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogs_index()
    {
        return view('admin.blog.blog-manage');
    }

    public function blog_create()
    {
        $categoris = Category::all();
        return view('admin.blog.blog-add',['categories' => $categoris]);
    }

    public function blog_store()
    {
        echo "this is a blog store page";
    }



    
}
