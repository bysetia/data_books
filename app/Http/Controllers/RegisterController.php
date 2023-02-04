<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', []);
    }

    public function create(Request $request)
    {
        // $request->validate([
        //     'name'=>'required',
        //     'email'=>'required',
        //     'password'=>'required',
        // ]);

        // $data = User::create($request->all());
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        // $request->session()->flash('Success', 'Registration, Success');

        return redirect('/book/all')->with('success', 'Register Success');
    }
}
