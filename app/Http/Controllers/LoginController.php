<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    // public function handleLogin(Request $request)
    // {
    //     // dd($request);
    //     $request->validate([
    //         'userName' => ['required','alpha','min:6','max:50'],
    //         'userEmail' => ['required','email', 'string'],
    //         'userPassword' => ['required'],
    //     ], [
    //         // This is how to overwrite default validation texts. 
    //         // or paano mo babaguhin yung error message depende sa gusto mo.
    //         // kung gusto mo baguhin, burahin mo lang yung array na to. 
    //         'userName.required' => 'The user name field is required men!',
    //         'userName.alpha' => 'Letters lang pwede sa user name.',
    //         'userName.min' => 'kulang yung letter minimum natin 6',
    //         'userEmail.required' => 'Kailangan ng email.',
    //     ]); 
    //     return $request;
    // }

    public function handleLogin(LoginRequest $request)
    {
        return $request;
    }
}
