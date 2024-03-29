<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register',
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:25', 'unique:users'], //harus beda
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:25'
        ]);
        // $validatedData['password']=bcrypt($validatedData['password']);
        User::create($validatedData);
        // $request->session()->flash('success', 'Registration SUccesfull, Please Login!');
        return redirect('/login')->with('success', 'Registration Succesfull, Please Login!');
    }
}
