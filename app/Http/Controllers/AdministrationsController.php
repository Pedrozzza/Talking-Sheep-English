<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Models\User;
use App\Models\Homework;
use App\Models\Applicant;
use Illuminate\Http\Request;

class AdministrationsController extends Controller
{


    public function index () {

        $users = User::all();
        $homeworks = Homework::orderBy('created_at', 'DESC')->get();
        $codes = Code::all();
        $applicants = Applicant::orderBy('created_at', 'DESC')->get();

        return view('administration.index')->with(compact('users', 'homeworks', 'codes', 'applicants'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete($id);

        return redirect('/administration')->with('success', 'User deleted');
    }
}
