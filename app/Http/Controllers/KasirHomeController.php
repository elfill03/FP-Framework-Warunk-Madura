<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirHomeController extends Controller
{
    //
    public function index()
    {
        return view('kasir.kasir-dashboard');
    }
}
