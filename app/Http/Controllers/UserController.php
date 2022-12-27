<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Posts;
use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    Public function index(){
        $users = Users::all();
        $artikels = Artikel::all();
        $link = Posts::all();
        return view('user.index', compact('users','artikels','link'));
    }
}
