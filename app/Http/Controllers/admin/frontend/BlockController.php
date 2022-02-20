<?php

namespace App\Http\Controllers\admin\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function index(){
        print view("admin.frontend.dashboard.dashboard");
    }
}
