<?php

namespace App\Http\Middleware;

use Closure;
use App\Setting;

class MaintenanceMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){

            $setting = Setting::where('id','maintenance_mode')->first();
          //dd($setting);
            if($setting->value == 0){
                $setting->value;
                return $next($request);
            }

            else{
                return redirect('/maintenance');
            }
       
           
        
        
    }
}
