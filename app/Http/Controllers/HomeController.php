<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
	    	$user = Auth::user();

	    	foreach ($user->roles as $role) {
	    		switch ($role->name) {
	    			case 'admin':
	    				return redirect()->route('admin.index');
	    			
	    			case 'pegawai':
	    				return redirect()->route('pegawai.index');
	    			
	    			case 'pemimpin':
	    				return redirect()->route('pemimpin.index');
                        break;
                        	    			
	    			default:
	    				# code...
	    				break;
	    		}
	    	}
    		
    	} catch (Exception $e) {
	        return redirect()->route('welcome');
    	}
    }
}
