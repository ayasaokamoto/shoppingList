<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class DashboardController extends Controller
{
    public function index() {
        // ログインしているユーザーのIDを取得
        $userId = auth()->id();

        // ログインしているユーザーのIDに紐づく、purchased カラムの値が 0 のアイテムのみを取得する
        $items = Item::where('purchased', 0)
                     ->where('user_id', $userId)
                     ->get();
        return view('dashboard', [
            'items' => $items
        ]);
    }
}
