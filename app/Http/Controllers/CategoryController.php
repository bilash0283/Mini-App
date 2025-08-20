<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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
        $request->validator([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required'            
        ]);

        $category = new Category();

        $category->name = $request->name;
        $category->description = $request->description;
        $category->status = $request->status;
        $category->save();

        return redirect()->route('category.index')->with('success','Category Create Successfull');

    }



}
