<?php

namespace app\Livewire;

use Livewire\Component;

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
}