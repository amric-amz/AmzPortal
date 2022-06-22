<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    public function index()
    {
        return view('SuperAdmin.Clients.create' , ['users' => User::all()]);
    }

    public function create()
    {
        return view('SuperAdmin.Clients.show');
    }

    public function store(Request $request)
    {
        return $request;
    }
}
