<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    public function setsession(Request $request)
    {
        //$request->session()->put('name', 'Rahul');
        //session(['name' => 'Rahul Gandhi from array']);
        session()->put([
            'name' => 'Rahul Gandhi',
            'email' => 'joho@yan.xom',
            'age' => 25,
            'city' => 'Mumbai'
        ]);
    }

    public function getsession(Request $request)
    {
        //return $request->session()->get(['name', 'email', 'age', 'city']);
        return response()->json($request->session()->only(['name', 'email', 'age', 'city']));
    }

    public function dekha(Request $request)
    {
        return view('get-session');

    }

    public function updateSession(Request $request)
    {
        session()->put('name', 'hayder ali Gandhi');
        session()->put('email', 'johans@y.com');
    }

    public function deleteSession(Request $request)
    {
        $request->session()->forget('name');
        $request->session()->forget('email');
    }
}
