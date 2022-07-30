<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.login');
    }

    /**
     * Logged in into the system
     *
     *
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);
        if (!auth()->attempt($request->only('email', 'password'))) {
            Alert::toast('Invalid credentials!', 'error');
            return back()->with('msg', 'These credentials do not match our records.');
        }
        // elseif(auth()->attempt($request->password))
        // {
        //     return back()->with('msg', 'Incorrect Password');
        // }
        Alert::toast('Welcome ' . Auth::user()->name . '!', 'success');
        return redirect()->route('user.home');
    }
    /**
     * Logout to the system
     *
     *
     *
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
