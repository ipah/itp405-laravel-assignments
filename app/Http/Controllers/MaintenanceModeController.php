<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaintenanceModeController extends Controller
{
    public function index(){
    	return view('/maintenance');
    }
}
