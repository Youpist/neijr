<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
            'email' =>'required',
            'password' => 'required',
            ],
            [
                'email.required' => 'Email tidak boleh kosong',
                'password.required' => 'Password tidak boleh kosong',
            ]
    );
    $infologin = [
        'email' => $request->email,
        'password' => $request->password,
    ];
    if (Auth::attempt($infologin)) {
        if(Auth::user()->role == 'customer') {
            return redirect()->route('siswa.index');
        }elseif(Auth::user()->role == 'kantin') {
            return redirect()->route('kantin.index');
        }elseif(Auth::user()->role == 'bank') {
            return redirect()->route('bank.index');
        }
    }else{
        return back()->with('error', 'Email atau password salah');
    }
    }
    function logout(){
        Auth::logout();
        return redirect('');
    }

}

   
