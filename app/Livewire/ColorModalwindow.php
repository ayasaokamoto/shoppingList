<?php

namespace app\Livewire;

use Livewire\Component;
use App\Models\Item;
use App\Models\Color;

class ColorModalwindow extends Component
{
    public $showColorModalwindow = false;
    public $colors;
    public $selectedColor = "#a9a9a9"; //デフォルトカラー黒
    public $colorPickerModal = false;

    public function render()
    {
        return view('livewire.color_modalwindow');
    }

    // カラー選択モーダル
    public function openColorModalwindow()
    {
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
        $this->closeColorModalwindow();
        $this->render();
    }

    // カラーピッカーで選択したカラーコードをテーブルに追加
    public function addColor($color)
    {
        // colorsテーブルに新しい色を追加
        Color::create([
            'user_id' => auth()->id(),
            'code' => $color,
        ]);
        $this->closeColorModalwindow();
    }
}