<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;

class newController extends Controller
{
    function optional(Request $req, $id = 0)
    {
        if ($id == 0) {
            return "No ID passed";
        } else {
            return "ID passed is: " . $id;
        }
    }

    function page(Request $req)
    {
        if ($req->isMethod('post')) {
            return "This is a POST request";
        }
        $page = $req->input('pages', 01);
        $product = $req->input('product', 10);
        return "Page is: " . $page . " and Product is: " . $product;
    }


}
