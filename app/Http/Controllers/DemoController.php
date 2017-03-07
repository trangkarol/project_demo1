<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //get page index of page
    public function getIndex()
    {
    	return view('demo.index');
    }
}
