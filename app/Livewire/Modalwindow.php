<?php

namespace app\Livewire;

use Livewire\Component;
use App\Models\Item;

class Modalwindow extends Component
{
    public $showModalwindow = false;
    public $itemId;

    protected $listeners = ['checkPurchased', 'delete'];

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

    public function checkPurchased($itemId)
    {
        $item = Item::findOrFail($itemId);
        $item->update(['purchased' => 1]);
        $this->emit('checkPurchased', $itemId);
        $this->showModalwindow = false;
        redirect('/dashboard');
    }

    public function delete($itemId)
    {
        Item::findOrFail($itemId)->delete();
        $this->showModalwindow = false;
        redirect('/dashboard');
    }
}