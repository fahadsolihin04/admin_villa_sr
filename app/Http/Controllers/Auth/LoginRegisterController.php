<?php

namespace App\Http\Controllers\Auth;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class LoginRegisterController extends Controller
{
    /**
     * Instantiate a new LoginRegisterController instance.
     */
    public function __construct()
    {
        // $this->middleware('guest')->except([
        //     'logout', 'dashboard'
        // ]);
    }

  
    public function login()
    {
        return view('auth.login_pelanggan');
    }

    /**
     * Authenticate the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
}