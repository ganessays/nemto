<?php

namespace App\Http\Controllers\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TheShowController extends Controller
{
    public function about_event (){
        $title = 'About The Events';
        return view('user.pages.theshow.about_the_events',compact('title'));

    }
    public function event_features (){
        $title = 'Event Features - NEMTO';
        return view('user.pages.theshow.event_features',compact('title'));

    }
    public function medical_industry (){
        $title = 'medical Features - NEMTO';
        return view('user.pages.theshow.medical_industry',compact('title'));

    }
    public function event_activities (){
        $title = 'medical Features - NEMTO';
        return view('user.pages.theshow.event_activities',compact('title'));

    }
    public function past_report_2018 (){
        $title = 'medical Features - NEMTO';
        return view('user.pages.theshow.past_report_2018',compact('title'));

    }
    public function about_organisers(){
        $title = 'About Organisers - NEMTO';
        return view('user.pages.theshow.about_organisers',compact('title'));

    }
    public function supporting_organisations(){
        $title = 'Supporting Organisations - NEMTO';
        return view('user.pages.theshow.supporting_organisations',compact('title'));

    }
    public function strategic_organisations(){
        $title = 'strategic organisations - NEMTO';
        return view('user.pages.theshow.strategic_organisations',compact('title'));

    }
    public function official_sales_partner(){
        $title = 'official sales partner - NEMTO';
        return view('user.pages.theshow.official_sales_partner',compact('title'));

    }
    public function thank_you_sponsors_2018(){
        $title = 'thank-you-sponsors-2018 - NEMTO';
        return view('user.pages.theshow.thank_you_sponsors_2018',compact('title'));

    }
}
