<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __invoke(){
        return "home";
    }
}

//http://localhost/clothing/clothing/public/