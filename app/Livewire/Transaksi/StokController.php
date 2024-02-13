<?php

namespace App\Livewire\Transaksi;

use App\Models\Stok;
use Livewire\Component;

class StokController extends Component
{
    public function render()
    {
        return view(
            'livewire.transaksi.stok-controller',
            [
                'datas' => Stok::all()
            ]
        )
            ->extends('layout.admin')
            ->section('konten');
    }
}
