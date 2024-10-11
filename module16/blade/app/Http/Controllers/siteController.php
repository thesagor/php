<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    function test()
    {
        $course = [
            'course1' => 'Laravel',
            'course2' => 'PHP',
            'course3' => 'Python',
            'course4' => 'Java',
            'course5' => 'C++'
        ];
        return response()->json($course);
    }

    function test1()
    {
        $course = [
            'course1' => 'Laravel',
            'course2' => 'PHP',
            'course3' => 'Python',
            'course4' => 'Java',
            'course5' => 'C++'
        ];
        return response()->json($course);
    }

    function test2()
    {
        $course = [
            'course1' => 'Laravel',
            'course2' => 'PHP',
            'course3' => 'Python',
            'course4' => 'Java',
            'course5' => 'C++'
        ];
        return response()->json($course);
    }

    function test3()
    {
        $course = [
            'course1' => 'Laravel',
            'course2' => 'PHP',
            'course3' => 'Python',
            'course4' => 'Java',
            'course5' => 'C++'
        ];
        return response()->json($course);
    }
}
