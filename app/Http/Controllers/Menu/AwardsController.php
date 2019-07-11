<?php

namespace App\Http\Controllers\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AwardsController extends Controller
{
    public function about_the_awards(){
        $title = 'About The Awards';
        return view('user.pages.awards.about_the_awards',compact('title'));
    }
}
