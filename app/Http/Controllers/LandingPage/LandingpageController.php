<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Rektor;
use App\Models\Cooperation;
use App\Models\Aboutme;
use App\Models\Announcement;
use App\Models\News;
use App\Http\Controllers\Controller;

class LandingpageController extends Controller
{
    public function index()
    {
        $cooperationImg = Cooperation::all();
        $abouts = Aboutme::first();
        $news = News::latest()->take(3)->get();

        return view('landing', compact('cooperationImg', 'abouts','news'));
    }
}
