<?php

namespace App\Http\Controllers\admin\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view("admin.frontend.category.allcategory");
    }
    public function create(){
        return view("admin.frontend.category.addcategory");
    }
}