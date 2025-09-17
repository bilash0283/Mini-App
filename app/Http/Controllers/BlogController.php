<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
        $categories = Category::all();
        return view('admin.blog.blog-add', ['categories' => $categories]);
    }

    public function blog_store(Request $request)
    {
       $blog = new Blog();

       $blog->name = $request->name;
       $blog->description = $request->description;
       $blog->category_id = $request->category_id;
       $blog->status = $request->status;
       $blog->save();

       return redirect()->route('blogs.index')->with('success','Blog Save Successfull');
    }



    
}
