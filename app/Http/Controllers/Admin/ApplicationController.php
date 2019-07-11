<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    public function index(){
        $title = 'Welcome Admin';
        return view('admin.index',compact('title'));
    }

}
