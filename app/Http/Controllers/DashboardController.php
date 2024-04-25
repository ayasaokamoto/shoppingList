<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class DashboardController extends Controller
{
    public function index() {
        $items = Item::all();
        return view('dashboard', ['items' => $items]);
    }
}
