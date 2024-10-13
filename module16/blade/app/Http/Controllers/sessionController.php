<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    function setflash(Request $request)
    {
        $request->session()->flash('message', 'This is a flash message');
        return redirect('gotflash');
    }

    function formvalidate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        return response("Form validated successfully");
    }
}
