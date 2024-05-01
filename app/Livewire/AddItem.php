<?php

namespace app\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

class AddItem extends Component
{
    public function render()
    {
        return view('livewire.add-item');
    }

    public function addNewItem()
    {
        // ログインしているユーザーのIDを取得
        $userId = auth()->id();

        $newItem = Item::create([
            "user_id" => $userId,
            'contents' => 'テキスト',
            "purchased" => '0',
        ]);
    }
}
