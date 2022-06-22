<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('SuperAdmin.Projects.create' , User::get()->all() );
    }

    public function create()
    {
        return view('SuperAdmin.Projects.show');
    }
}
