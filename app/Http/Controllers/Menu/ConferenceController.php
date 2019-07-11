<?php

namespace App\Http\Controllers\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConferenceController extends Controller
{
    public function why_attend(){
        $title = 'Why Attend - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('user.pages.conference.why_attend',compact('title'));
    }
    public function who_can_attend(){
        $title = 'Who Can Attend  - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('user.pages.conference.who_can_attend',compact('title'));
    }
    public function highlights(){
        $title = 'Highlights  - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('user.pages.conference.highlights',compact('title'));
    }
    public function conference_speakers_2018(){
        $title = 'Conference Speakers 2018  - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('user.pages.conference.conference_speakers_2018',compact('title'));
    }
    public function agenda_programme(){
        $title = 'Conference Speakers 2018  - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('user.pages.conference.agenda_programme',compact('title'));
    }
    public function regional_forum_schedule(){
        $title = 'Regional Forum Schedule - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('user.pages.conference.regional_forum_schedule',compact('title'));
    }
}
