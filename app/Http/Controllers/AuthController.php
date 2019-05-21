<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Exception;

class AuthController extends Controller
{
    public function getLogin()
    {
    	return view('user.login');
    }

    public function postLogin(Request $request)
    {
    	try
    	{
    	 $request->validate([
         'email'=>'required|email',
         'password'=>'required',	
   	  ]);
    	  $params=[
          'email'=>$request->input('email'),
          'password'=>$request->input('password'),
    	];
    	  
    	if (!Auth::attempt($params)) 
    	{ 
    	   throw new Exception("Invalid User", 401);
    	       
    	}
    	return redirect()->route('index');
    	}

        catch(Exception $e)
        {
        	flash($e->getMessage())->error();
        	return redirect()->route('login');
        }
    	
    }
    
}
