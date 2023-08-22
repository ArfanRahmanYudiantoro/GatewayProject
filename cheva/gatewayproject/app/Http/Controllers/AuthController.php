<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function tampilanLogin(){
        return view ("login.login");
    }
}
