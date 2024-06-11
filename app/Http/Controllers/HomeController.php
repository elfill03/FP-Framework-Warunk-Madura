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

        // Redirect to appropriate dashboard based on user role
        $user = Auth::user();
        if ($user->role == 'super_admin') {
            return view('superAdmin.sup-admin-dashboard', ['user' => $user]);
        } elseif ($user->role == "admin") {
            return view("admin.admin-dashboard", ['user' => $user]);
        } elseif ($user->role == 'kasir') {
            return view('kasir.kasir-dashboard', ['user' => $user]);
        } else {
            return view('error');
        }

    }
}
