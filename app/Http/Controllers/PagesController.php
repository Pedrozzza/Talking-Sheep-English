<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function maintenance() {
        return view('pages.maintenance');
    }

    public function massMessaging() {

        $users = User::all();

        return view('pages.mass_messaging')->with('users', $users);
    }

    public function applicants() {

        return view('pages.applicants');
    }

    public function info() {
        return view('pages.info');
    }

    public function prices() {
        return view('pages.prices');
    }
}
