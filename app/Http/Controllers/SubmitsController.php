<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmitsController extends Controller
{
    public function index () {
        
        return view('submit.index');
    }
}
