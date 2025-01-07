<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function info()
    {
        $fruits = [
            'vitamin A' => 'apple',
            'vitamin B' => 'banana',
            'vitamin C' => 'orange',
            'vitamin D' => 'grape',
            'vitamin E' => 'kiwi'
        ];
        return $fruits;
    }

    public function check()
    {
        return response()->json(['message' => 'You are authorized to access this page from controller'], 200);
    }
}
