<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

date_default_timezone_set("Europe/London");

class Home extends Controller
{
    public function time()
    {
        if (date("H") < 12) {
            return "Good morning";
        } else if (date("H") < 18) {
            return "Good afternoon";
        } else {
            return "Good evening";
        }
    }
    
    public function index()
    {
        return view("welcome", [
            'greeting' => Home::time()
        ]);
    }
}
