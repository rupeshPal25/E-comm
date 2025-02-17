<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        // return $req->input();
        // match with database
        $user = User::where(['email' => $req->email])->first();
        // return $user->password;
        if (!$user || !Hash::check($req->password, $user->password)) {
            return "Username or password is not matched";
        } else {
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }
}
