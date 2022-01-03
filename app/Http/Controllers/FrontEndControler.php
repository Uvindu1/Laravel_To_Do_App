<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndControler extends Controller
{
    public function taskApp(){
        return view('tasks');
    }
}
