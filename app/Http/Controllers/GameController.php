<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Faker\Provider\zh_CN\DateTime;
use Illuminate\Http\Request;

class GameController extends Controller
{

    public function index(){
        return view('Ruben');
    }
    
    public function update(){
        
    	
        return Carbon::now();
    }
}
