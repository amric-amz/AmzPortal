<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class RedirectionController extends Controller
{

    public function redirection()
    {
        if(auth()->user()){
            return view('dashboard');
        }
        else{
            return view('auth.login');
        }
    }
}
