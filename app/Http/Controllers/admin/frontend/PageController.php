<?php

namespace App\Http\Controllers\admin\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view("admin.frontend.pages.all-page");
    }
    public function create(){
        return view("admin.frontend.pages.add-page");
    }
}