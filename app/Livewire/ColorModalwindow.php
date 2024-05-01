<?php

namespace app\Livewire;

use Livewire\Component;
use App\Models\Item;
use App\Models\Color;

class ColorModalwindow extends Component
{
    public $showColorModalwindow = false;
    public $colors;
    public $selectedColor = '#000000'; //デフォルトカラー黒

    public function render()
    {
        return view('livewire.color_modalwindow');
    }

    public function openColorModalwindow()
    {
        // 全てのアイテムに関連したモーダルを閉じる
        $this->emit('closeAllModals');
        
        $this->showColorModalwindow = true;
        // colorsテーブルからユーザーに関連付けられたカラーコードを取得
        $this->colors = Color::where('user_id', auth()->id())->pluck('code')->toArray();
    }

    public function closeColorModalwindow()
    {
        $this->showColorModalwindow = false;
    }

    public function selectColor($color)
    {
        $this->selectedColor = $color;
        $this->closeColorModalwindow(); // カラーが選択されたらモーダルを閉じる
        $this->render();
    }
}