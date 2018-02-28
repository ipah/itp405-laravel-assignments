<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingsController extends Controller
{
    public function index(){
    	$setting = Setting::where('id','maintenance_mode')->first();
    	return view('settings',['setting'=>$setting]);
    }

    public function update(){
    	$setting = Setting::where('id','maintenance_mode')->first();

    	//dd($setting);
    	if($setting->value == 1){
    		$setting->value = 0;
    		$setting->save();
    		return view('settings',['setting'=>$setting]);
    	}
    	else{
    		$setting->value = 1;
    		$setting->save();
    		return view('settings',['setting'=>$setting]);
    	}
    		
    		
    	
    }
}
