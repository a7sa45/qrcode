<?php

namespace App\Http\Controllers;

use App\Models\Qrcode;
use App\Models\User;
use Illuminate\Http\Request;

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
        $username = User::all()->where('username', $username)->first();
        $qrcodes = Qrcode::all()->where('user_id', $username->id);
        return view('home', compact('qrcodes'));
    }
}
