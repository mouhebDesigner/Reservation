<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::where('role', 'client')->get();
        return view('admin.inscriptions.index', compact('users'));
    }

    public function valider($id){
        $user = User::find($id);

        $user->approuver = true;

        $user->save();

        return redirect('admin/users')->with('valider', 'Le compte de '.$user->nom.' '.$user->prenom.' est validé');
    }
    public function refuser($id){
        $user = User::find($id);

        $user->approuver = false;

        $user->save();

        return redirect('admin/users')->with('refuser', 'Le compte de '.$user->nom.' '.$user->prenom.' est refusé');
    }
}
