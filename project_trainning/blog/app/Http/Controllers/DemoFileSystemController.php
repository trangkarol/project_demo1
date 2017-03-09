<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Auth;


class DemoFileSystemController extends Controller
{
    //get index
    public function index()
    {
    	// Storage::
        //Auth::logout();
    	return view('demo.test');
        /*echo base_path();
        echo url('/assets/css/common/bootstrap.cs');*/
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
