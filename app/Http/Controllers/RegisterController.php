<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register.index',[
            'title' => "Registrasi Form",
        ]);
    }   
    public function daftar(Request $request)
    {
        $validasiData = $request->validate([
            'username' => 'required|min:2|max:50',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:20',

        ]);
        
        $validasiData['password'] = bcrypt($validasiData['password']);

        User::create($validasiData);

        // $request->session()->flash('sukses', 'Registrasi Berhasil !');

        return redirect('/login')->with('sukses', 'Registrasi Berhasil !');
    }
}

