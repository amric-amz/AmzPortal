<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Klaviyo\sms_consent;

class UsersController extends Controller
{
    public function index()
    {
        return view('SuperAdmin.Registration.create');
    }

    public function create()
    {
        $users = User::all();
        return view('SuperAdmin.Registration.show' , ['users' => $users]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required', 'max:255',
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
            'role_id' => ['required', 'string', 'max:255'],
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
            'role_id.required' => 'Role is required',
        ])->validate();

        $userListening = [

            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request['password']),
            'role_id' => $request->get('role_id'),

        ];

        $user = User::userRegistered($userListening);
        if(!empty($user))
        {
            return redirect()->back()->with('success' , 'User Has Been Created Successfully!');
        }
        else
        {
            return "User didn't create something wrong";
        }

    }

    public function userDelete(Request $request, $id)
    {
        $user = User::where('user_id' , $id)->delete();
        return redirect()->back()->with('success' , 'User Has Been Deleted Successfully!');
    }

    public function edit($id)
    {
        return view('SuperAdmin.Registration.edit' , ['userEdit' => User::find($id)]);
    }

    public function update(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required', 'max:255',
            'email' => ['required', 'string', 'max:255'],
            'role_id' => ['required', 'string', 'max:255'],
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'role_id.required' => 'Role is required',
        ])->validate();

        $userListeningUpdate = [

            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'role_id' => $request->get('role_id'),

        ];

        $user = User::userUpdate($userListeningUpdate , $id);

        return redirect()->back()->with('success' , 'User Has Been Updated Successfully!');
    }








    public function v_klaviyo()
    {
        return view('klaviyo');
    }

    public function createKlaviyo(Request $request)
    {

        $contact =  $request->contact;
        $email =  $request->email;
        $smsconcern = $request->smsconcern;

        if($smsconcern == "on")
        {
            $msg = "Sms Concern Has Been Activated on Your Contact Numner Successfully!";
            $respons = sms_consent::klaviyoSmsConsent($msg , $contact , $email);

            return $respons;
        }

        else
        {
            return "Sms Concern didn't activate on your contact number";
        }

    }
}
