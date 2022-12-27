<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $users = Users::all();
        return view('dashboard', compact('users'));
    }
    public function viewuser(){
        return view('user.edit');
    }
}
