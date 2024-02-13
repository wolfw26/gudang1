<?php

namespace App\Livewire\Master;

use App\Models\Barang;
use App\Models\JenisBarang;
use App\Models\Supplier;
use Livewire\Component;

class BarangController extends Component
{

    public $is_Tambah = False;

    public $kode, $barang, $merk;
    public $JenisBarang, $SupplierBarang;

    public function Tambah()
    {
        $this->is_Tambah = !$this->is_Tambah;
    }

    public function Add()
    {
        $createBarang = Barang::create([
            'kode_barang' => $this->kode,
            'nama_barang' => $this->barang,
            'merk' => $this->merk,
            'id_jenis' => $this->JenisBarang,
            'id_supplier' => $this->SupplierBarang,
        ]);
        $this->reset('kode', 'barang', 'merk', 'JenisBarang', 'SupplierBarang');
    }

    public function render()
    {
        return view('livewire.master.barang-controller', [
            'datas' => Barang::all()->sortBy(['id', 'desc']),
            'jenis' => JenisBarang::all(),
            'suppliers' => Supplier::all()
        ])
            ->extends('layout.admin')
            ->section('konten');
    }
}
