<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $users = User::all();
        return view('admin.user.register')->with(['users'=>$users]);
    }
}
