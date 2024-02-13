<?php

namespace App\Livewire\Sales;

use Livewire\Component;

class Dasboard extends Component
{
    public function render()
    {
        return view('livewire.sales.dasboard')
            ->extends('layout.sales')
            ->section('konten');
    }
}
