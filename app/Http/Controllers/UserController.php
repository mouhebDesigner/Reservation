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
}
