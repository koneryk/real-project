<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /*public function index(

    )*/
    public function admin(Request $request){
        
        return view('admin');
    }
}
