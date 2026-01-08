<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home.index');
    }

    public function about(){
        return view('about.index');
    }

    public function service($slug){
        if($slug === 'bodycam'){
            return view('services.bodycam');
        }else if($slug == 'dashcam'){
            return view('services.dashcam');
        }else if($slug === 'dronecam'){
            return view('services.drone');
        }else if($slug === 'ipcam'){
            return view('services.ipcam');
        }
        
    }
}
