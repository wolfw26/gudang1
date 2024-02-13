<?php

namespace App\Livewire\Master;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.master.home')
            ->extends('layout.admin')
            ->section('konten');
    }
}
