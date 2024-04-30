<?php

namespace app\Livewire;

use Livewire\Component;
use App\Models\Item;

class Modalwindow extends Component
{
    public $showModalwindow = false;

    public function render()
    {
        return view('livewire.modalwindow');
    }

    public function openModalwindow()
    {
        $this->showModalwindow = true;
    }

    public function closeModalwindow()
    {
        $this->showModalwindow = false;
    }

    public $itemId;

    public function check_purchased($itemId)
    {
        $item = Item::findOrFail($itemId);
        $item->update(['purchased' => 1]);
        $this->showModalwindow = false;
    }
}