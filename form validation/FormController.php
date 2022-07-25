<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FormController extends Controller
{
    public function create(){
        return view('createUser');

    }


    public function store(Request $request){
        $validateData=$request->validate([
            'name'=>'required',
            'password'=>'required|min:5',
            'email'=>'required|email|unique:users'],
            [
                'name.required'=>'Name field is required',
                'password.required'=>'Password field is required',
                'email.required'=>'Email field is required',
                'email.email'=>'Must be a valid email'
        ]);

        $validateData['password']=bcrypt($validateData['password']);
        $user=User::create($validateData);

        return back()->with('success','user created successfuly.');


    }
}
