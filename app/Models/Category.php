<?php

namespace App\Models;

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


}
