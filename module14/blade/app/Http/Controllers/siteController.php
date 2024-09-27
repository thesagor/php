<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    function homePage()
    {
        $student = [
            ['name' => 'Rahim', 'age' => 25],
            ['name' => 'Karim', 'age' => 26],
            ['name' => 'Jabbar', 'age' => 27],
            ['name' => 'Salim', 'age' => 28],
            ['name' => 'Kamal', 'age' => 29]
        ];
        return view('pages.home', ['students' => $student]);
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
