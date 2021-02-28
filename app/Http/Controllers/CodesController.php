<?php

namespace App\Http\Controllers;

use App\Models\Code;
use Illuminate\Http\Request;

class CodesController extends Controller
{
    public function store (Request $request) {
       
        //validace
        $this->validate($request, [
            'code' => 'required | max:255',
        ]);

        //ulozeni souboru do databaze
        $code = new Code;
        $code->code = $request->input('code');
        $code->save();

        return redirect('/administration')->with('success', 'Nový kód vytvořen!');
    }

    public function destroy($id) {

        $code = Code::find($id);
        $code->delete($id);

        return redirect('/administration')->with('success', 'Registrační kód smazán');
    }
}
