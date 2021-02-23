<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index($id) {
        
        $user = User::find($id);
        return view('administration.message')->with('user', $user);
    }

    public function store(Request $request, $id) {
        
        //validace
        $this->validate($request, [
            'title' => 'required | max:255',
            'body' => 'nullable',
            'number' => 'nullable | numeric | max:255',
            'file_message' => 'nullable | file | max: 10000',
        ]);

        //ulozeni souboru do uloziste
        if($request->hasFile('file_message'))
        { 
            $fileNameWithExt = $request->file('file_message')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file_message')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '.' . rand(1, 999) . '.' . $extension;
            $path = $request->file('file_message')->storeAs('public/message_upload', $fileNameToStore);
        } else{
            $fileNameToStore = '';
        }

        //ulozeni souboru do databaze
        $message = new Message;
        $message->user_id = $id;
        $message->title = $request->input('title');
        $message->body = $request->input('body');
        $message->number = $request->input('number');
        $message->file = $fileNameToStore;
        $message->evaluation = $request->input('evaluation');
        $message->save();


        return redirect('/administration')->with('success', 'Zpráva odeslána!');
    }
}
