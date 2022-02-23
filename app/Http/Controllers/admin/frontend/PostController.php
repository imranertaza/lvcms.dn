<?php

namespace App\Http\Controllers\admin\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view("admin.frontend.posts.all-post");
    }
    public function create(){
        return view("admin.frontend.posts.add-post");
    }
}