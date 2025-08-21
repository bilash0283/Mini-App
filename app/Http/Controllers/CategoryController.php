<?php

namespace App\Http\Controllers;

use App\Http\Middleware\HandleInertiaRequests;
use App\Models\Category;
use Symfony\Component\HttpFoundation\Request;


class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.category-manage');    
    }

    public function create()
    {
        return view('admin.category.category-add');
    }

    public function store(Request $request)
    {

        dd($request);
        exit();

        $category = new Category();

        $category->cat_name = 'Category Name';
        $category->description = 'Category Description';
        $category->status = 1;
        $category->save();

        return redirect()->route('category.index')->with('success','Category Create Successfull');

    }



}
