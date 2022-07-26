<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    protected $guarded = ['id'];

    public function categorytype(Category $category)
    {
        return view('all', [
            'title' => "By Category $category->name",
            'datas' => $category->post->load('user', 'category'),
        ]);
    }
}
