<?php

namespace App\Http\Controllers;

use App\Http\Middleware\HandleInertiaRequests;
use App\Models\Category;
use Symfony\Component\HttpFoundation\Request;


class CategoryController extends Controller
{
    public function index()
    {
        $categoryes = Category::paginate(10);
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

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.category-edit',['cat_item' => $category]);
    }


    public function update(Request $request, $id)
    {
        $Category = Category::findOrFail($id);

        $Category->cat_name = $request->name;
        $Category->description = $request->description;
        $Category->status = $request->status;
        $Category->save();

        return redirect()->route('category.index')->with('success','Category Update Successfull');

    }



}
