<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return view('pages.index');
    }

    public function welcome() {
        return view('pages.welcome');
    }
}
