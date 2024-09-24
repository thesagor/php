<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    function sayhi()
    {
        return response("helllo boss");

    }

    function myimage()
    {
        return response()->download(public_path("image.jpg"));
    }

    function arrayWork(Request $request, $name, $nick, $age)
    {
        return response([$name, $nick, $age]

        );
    }

    function jbody(Request $request)
    {
        return response()->json($request->all());

    }
}
