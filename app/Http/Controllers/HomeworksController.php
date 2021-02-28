<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeworksController extends Controller
{
    public function store(Request $request) {
        
        //validace
        $this->validate($request, [
            'name' => 'required | max:255',
            'number' => 'required | numeric | max:255',
            'file' => 'required | file | max: 10000',
        ]);

        //ulozeni souboru do uloziste
        if($request->hasFile('file'))
        { 
            $fileNameWithExt = $request->file('file')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '.' . rand(1, 999) . '.' . $extension;
            $path = $request->file('file')->storeAs('public/homework_upload', $fileNameToStore);
        } else{
            $fileNameToStore = '';
        }

        //ulozeni souboru do databaze
        $homework = new Homework;
        $homework->user_id = auth()->user()->id;
        $homework->name = $request->input('name');
        $homework->number = $request->input('number');
        $homework->file = $fileNameToStore;
        $homework->save();


        return redirect('/submit')->with('success', 'Úkol úspěšne odeslán!');
    }

    public function destroy($id) {

        $homework = Homework::find($id);
        Storage::delete('public/homework_upload/' . $homework->file);
        $homework->delete($id);

        return redirect('/administration')->with('success', 'Homework deleted!');
    }
}
