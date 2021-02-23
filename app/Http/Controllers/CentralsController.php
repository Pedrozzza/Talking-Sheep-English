<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;

class CentralsController extends Controller
{
    public function index() {

        $user = Auth()->user()->id;
        
        $messages = Message::where('user_id', $user)->orderBy('created_at', 'DESC')->get();
        
        $messages_count = count($messages);
        

        return view('central.index')->with(compact('user', 'messages'));

    }
}
