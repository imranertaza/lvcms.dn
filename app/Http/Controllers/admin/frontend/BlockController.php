<?php

namespace App\Http\Controllers\admin\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function index(){
        return view("admin.frontend.blocks.all-block");
    }
    public function create(){
        return view("admin.frontend.blocks.add-block");
    }
}