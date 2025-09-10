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
        $categoris = Category::paginate(10);
        return view('admin.blog.blog-add',['categories' => $categoris]);
    }




    
}
