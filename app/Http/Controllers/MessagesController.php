<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use App\Models\Homework;
use App\Mail\MassMessage;
use App\Mail\MessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class MessagesController extends Controller
{
    public function index($id) {

        $user = User::find($id);
        return view('administration.message')->with('user', $user);
    }

    public function store(Request $request, $id) {



        //validace
        $this->validate($request, [
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
        $message->body = $request->input('body');
        $message->number = $request->input('number');
        $message->file = $fileNameToStore;
        $message->evaluation = $request->input('evaluation');
        $message->save();

        $user = User::find($id);

        $homework = Homework::where('user_id', $user->id)->update(array('checked' => '&#9745;'));


        Mail::to($user->email)->send(new MessageMail());

        return redirect('/administration')->with('success', 'Zpráva odeslána!');
    }

    public function destroy($id) {

        $message = Message::find($id);
        Storage::delete('public/message_upload/' . $message->file);
        $message->delete($id);

        return redirect('/central')->with('success', 'Report vymazán');
    }

    public function sendMassMessage(Request $request) {

        //validace
        $this->validate($request, [
            'subject' => 'required | max:100',
            'body' => 'required',
            'users' => 'required',
        ]);

        //predmet zpravy
        $subject = $request->input('subject');
        //telo zpravy
        $body =strip_tags($request->input('body'));

        //pro kazdeho uzivatele
        foreach(User::find($request->input('users')) as $user) {

            //najdi email uzivatele
            $email = $user->email;

            //posli email
            Mail::to($email)->send(new MassMessage($body, $subject));
        }

        return Redirect::back()->with('success', 'Zpráva odeslána');
    }
}
