<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function job(){
        return view ('landingPage.job');
    }

    public function beranda(){
        return view ('landingPage.beranda');
    }

    public function about(){
        return view ('landingPage.about');
    }

    public function team(){
        return view ('landingPage.team');
    }

    public function contact(){
        return view ('landingPage.contact');
    }
}
