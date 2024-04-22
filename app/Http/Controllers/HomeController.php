<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // DB使う時に記述

class HomeController extends Controller
{
    public function index() {
        $view = view('home');
        // $view->array = ['a','b','c'];
        // $users = DB::table('list')->get();
        // print_r($users);
        return $view;
    }
}
