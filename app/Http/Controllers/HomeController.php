<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB; // DB使う時に記述
use App\Models\Item;

class HomeController extends Controller
{
    public function index() {
        $items = Item::all(); // モデルから全てのアイテムを取得
        return view('home', ['items' => $items]); // ビューにアイテムを渡して表示
    }
}
