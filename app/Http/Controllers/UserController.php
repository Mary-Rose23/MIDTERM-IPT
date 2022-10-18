<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){

        $u = User::get();
        return view('users.index', ['users'=>$u]);
    }
}
