<?php

namespace App\Http\Controllers\admin\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index(){
        return view("admin.frontend.settings.settings");
    }
}