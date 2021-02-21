<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdministrationsController extends Controller
{


    public function index () {

        $users = User::all();
        
        return view('administration.index')->with(compact('users'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete($id);

        return redirect('/administration')->with('success', 'User deleted');
    }
}
