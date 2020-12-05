<?php

namespace App\Http\Controllers;

use App\Moddels\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $userNom = Auth::user()->nom;
        $userCognoms = Auth::user()->cognoms;
        $userEmail = Auth::user()->email;
        $userFoto = Auth::user()->url_foto;

        $userInfo = [
            $userId,
            $userNom,
            $userCognoms,
            $userEmail,
            $userFoto
        ];

        return view('home', compact('userInfo'));
    }
}
