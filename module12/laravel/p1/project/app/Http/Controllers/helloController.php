<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    function sayhi()
    {
        return response("helllo boss");

    }
}
