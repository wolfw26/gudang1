<?php

namespace App\Livewire\Pegawai;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.pegawai.home')
            ->extends('layout.admin')
            ->section('konten');
    }
}
