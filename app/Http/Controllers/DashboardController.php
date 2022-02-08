<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    //
    public function dashboard(){

        
        $role = Auth::user()->role;
        if($role == 0){
            return view('dashboard');
        }
        else{
            return view('admin.dashboard');
        }
        
    }
}
