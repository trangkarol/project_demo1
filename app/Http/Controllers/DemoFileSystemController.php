<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class DemoFileSystemController extends Controller
{
    //get index
    public function index()
    {
    	// Storage::
    	return view('demo.test');
    }

    //get form login
    public function store(Request $request)
    {
    	$user = new User;

    	//
    	$user->name 	=	$request->name;
    	$user->email 	=	$request->email;
    	$user->password =	encrypt($request->password);
    	//
    	$user->save();

    	return redirect()->back();

    }
}
