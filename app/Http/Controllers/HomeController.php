<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
        $user = Auth::user();
        if ($user->role == 'super_admin') {
            // return redirect()->route('superAdmin.sup-admin-dashboard');
            return view('superAdmin.sup-admin-dashboard');
        } elseif ($user->role == "admin") {
            // return redirect()->route("admin.admin-dashboard");
            return view("admin.admin-dashboard");
        } elseif ($user->role == 'kasir') {
            // return redirect()->route('kasir.kasir-dashboard');
            return view('kasir.kasir-dashboard');
        } else {
            return view('home');

        }
    }
}
