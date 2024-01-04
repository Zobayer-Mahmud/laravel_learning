<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    
    function Home(){
        return "this is home controller";
    }
    function About(){
        return "this is About controller";
    }
    function Contact(){
        return "this is Contact controller";
    }
}
