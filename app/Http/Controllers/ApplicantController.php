<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function apply(Request $request) {

        //validace
        $this->validate($request, [
            'name' => 'required | max:255',
            'email' => 'required | email | max:255',
            'phone' => 'required | max: 255',
        ]);

        $applicant = new Applicant;    
        $applicant->name = $request->name;
        $applicant->email = $request->email;
        $applicant->phone = $request->phone;
        $applicant->save();
        
        return redirect()->back()->with('message', 'Díky za tvůj zájem, odpovíme ti brzy:)');
    }

    public function destroy($id) {
        $applicant = Applicant::find($id);
        $applicant->delete();

        return redirect('/administration')->with('success', 'Zájemce byl úspěšně smazán!');
    }
}
