<?php

namespace app\Livewire;

use Livewire\Component;
use App\Models\Color;
use Illuminate\Support\Facades\Log;

class ColorModalwindow extends Component
{
    public $showColorModalwindow = false;
    public $colors;
    public $selectedColor = "#a9a9a9"; //デフォルトカラー
    public $showColorDeleteButton = false; //color deleteボタン
    public $showDeleteOkButton = false; // okボタン
    public $showDeleteButton = false; //×ボタン
    public $colorToDelete; // 削除対象の色

    public function render()
    {
        return view('livewire.color_modalwindow');
    }

    // カラー選択モーダルを表示
    public function openColorModalwindow()
    {
        $this->showColorModalwindow = true;
        // colorsテーブルからユーザーに関連付けられたカラーコードを取得
        $this->colors = Color::where('user_id', auth()->id())->pluck('code')->toArray();
    }

    // カラー選択モーダルを閉じる
    public function closeColorModalwindow()
    {
        $this->showColorModalwindow = false;
    }

    // 表示カラー選択
    public function selectColor($color)
    {
        $this->selectedColor = $color;
        $this->closeColorModalwindow();
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

    //color deleteボタンを押した時、color deleteボタン非表示、okボタン表示
    public function colorDelete()
    {
        $this->showDeleteOkButton = true;
        $this->showDeleteButton = true;
        $this->showColorDeleteButton = true;
    }

    // ×ボタンを押した時
    public function delete($colorToDelete)
    {
        // 削除処理を実行
        Color::where('user_id', auth()->id())->where('code', $colorToDelete)->delete();
    }


    // okボタンを押したら、color deleteボタン表示、okボタン非表示
    public function deletionComplete()
    {
        $this->showDeleteOkButton = false;
        $this->showDeleteButton = false;
        $this->showColorDeleteButton = false;
    }
}
