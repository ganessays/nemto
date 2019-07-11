<?php

namespace App\Http\Controllers\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function exhibitor_registration(){
        $title = 'Exhibitor Registration - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('user.pages.registration.exhibitor_registration',compact('title'));

    }
    public function foreign_delegate_registration(){
        $title = 'Foreign Delegate Registration - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('user.pages.registration.foreign_delegate_registration',compact('title'));

    }
    public function conference_registration(){
        $title = 'Exhibitor Registration - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('user.pages.registration.conference_registration',compact('title'));

    }
    public function delegate_registration(){
        $title = 'Delegate Registration - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('user.pages.registration.conference_registration',compact('title'));

    }
}
