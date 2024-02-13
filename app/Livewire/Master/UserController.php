<?php

namespace App\Livewire\Master;

use Livewire\Component;

class UserController extends Component
{
    public function render()
    {
        return view('livewire.master.user-controller')
            ->extends('layout.admin')
            ->section('konten');
    }
}
