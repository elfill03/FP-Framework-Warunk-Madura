<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperHomeController extends Controller
{
    //
    public function index()
    {
        return view('superAdmin.sup-admin-dashboard');
    }
}
