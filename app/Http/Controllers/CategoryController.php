<?php

namespace App\Http\Controllers;

use App\Http\Middleware\HandleInertiaRequests;
use App\Models\Category;
use Symfony\Component\HttpFoundation\Request;


class CategoryController extends Controller
{
    public function index()
    {
        $categoryes = Category::all();
        return view('admin.category.category-manage',['categories' => $categoryes]);    
    }

    public function create()
    {
        return view('admin.category.category-add');
    }

    public function store(Request $request)
    {

        $category = new Category();

        $category->cat_name = $request->name;;
        $category->description = $request->description;;
        $category->status = $request->status;
        $category->save();

        return redirect()->route('category.index')->with('success','Category Create Successfull');

    }

    public function edit()
    {
        
    }



}
