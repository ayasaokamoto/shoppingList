<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoughtController extends Controller
{
    public function index() {
        return view('dashboard');
    }
}
