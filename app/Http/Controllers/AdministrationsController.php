<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Homework;
use Illuminate\Http\Request;

class AdministrationsController extends Controller
{


    public function index () {

        $users = User::all();
        $homeworks = Homework::orderBy('created_at', 'DESC')->get();

        return view('administration.index')->with(compact('users', 'homeworks'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete($id);

        return redirect('/administration')->with('success', 'User deleted');
    }
}
