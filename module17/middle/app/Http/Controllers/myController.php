<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    function info(Request $request)
    {
        $fruitlist = [
            'vitaminC' => 'orange',
            'vitaminA' => 'carrot',
            'vitaminB' => 'banana',
            'vitaminD' => 'milk',
            'vitaminE' => 'almond'
        ];
        return $fruitlist;
    }
}
