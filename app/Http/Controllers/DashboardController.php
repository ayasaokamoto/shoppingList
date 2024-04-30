<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class DashboardController extends Controller
{
    public function index() {
        // purchased カラムの値が 0 のアイテムのみを取得する
        $items = Item::where('purchased', 0)->get();
        return view('dashboard', [
            'items' => $items
        ]);
    }
}
