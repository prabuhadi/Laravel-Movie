<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function regist()
    {
        return view('page.form');
    }
    public function welcome(Request $request)
    {
        $namaDepan = $request['fname'];
        $namaBelakang = $request['lname'];

        return view('page.welcome', ['firstName' => $namaDepan, 'lastName' => $namaBelakang]);
    }
}
