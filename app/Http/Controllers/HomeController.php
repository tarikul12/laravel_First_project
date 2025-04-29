<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function studentShow()
    {
        return view('studentShow');
    }

    public function show()
    {
        return view('show');

    }

}
