<?php

namespace App\Http\Controllers\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisitorsController extends Controller
{
    public function why_visit(){
        $title = 'Why Visit - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('user.pages.visitors.why_visit',compact('title'));
    }
    public function who_can_visit(){
        $title = 'Who Can Visit - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('user.pages.visitors.who_can_visit',compact('title'));
    }
    public function visitor_profile(){
        $title = 'Visitor Profile - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('user.pages.visitors.visitor_profile',compact('title'));
    }
    public function admission_policy(){
        $title = 'Admission Policy - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('user.pages.visitors.admission_policy',compact('title'));
    }
}
