<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
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
    }


}
