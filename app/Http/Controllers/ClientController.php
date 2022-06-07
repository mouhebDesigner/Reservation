<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = User::where('role', 'client')->get();
        return view('admin.clients.index', compact('clients'));
    }
}
