<?php

namespace App\Http\Controllers\admin\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        return view("admin.frontend.role.role");
    }
}