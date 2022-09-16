<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        // echo "Welcome to Anka";
        //return view ('test');
        return view ('home');
    }

    public function about()
    {
        echo "About Anka";
    }

    public function admin()
    {
        // echo "Admin will be here";
        return view ('admin');

    }
}
