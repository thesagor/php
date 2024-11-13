<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    function homePage()
    {
        return view('pages.home');
    }

    function aboutPage()
    {
        return view('pages.about');
    }

    function contactPage()
    {
        return view('pages.contact');
    }

    function testimonialPage()
    {
        return view('pages.testimonial');
    }
}
