<?php

namespace App\Livewire\Master;

use App\Models\Supplier;
use Livewire\Component;

class SupplierController extends Component
{
    public $kode, $nama_supplier, $alamat, $kode_pos, $telepon, $email;
    public $status = 'Aktif';
    public $is_edit = '';
    public $is_form = '';
    public $id_supplier = '';

    public function cancelForm()
    {
        $this->reset('kode', 'nama_supplier', 'alamat', 'kode_pos', 'telepon', 'email', 'status');
        $this->is_edit = '';
        $this->is_form = '';
        $this->id_supplier = '';
    }
    public function tambah()
    {
        $this->is_form = true;
    }
    public function edit(Supplier $id)
    {
        $this->is_edit = true;
        $this->is_form = true;
        if ($this->is_edit && $this->is_form) {
            $this->id_supplier = $id->id;
            $this->kode = $id->kode;
            $this->nama_supplier = $id->nama_supplier;
            $this->alamat = $id->alamat;
            $this->kode_pos = $id->kode_pos;
            $this->telepon = $id->telepon;
            $this->email = $id->email;
            $this->status = $id->status;
        }
    }

    public function Update()
    {
        $supplier = Supplier::where('id', $this->id_supplier)->first();
        $supplier->kode = $this->kode;
        $supplier->nama_supplier = $this->nama_supplier;
        $supplier->alamat = $this->alamat;
        $supplier->kode_pos = $this->kode_pos;
        $supplier->telepon = $this->telepon;
        $supplier->email = $this->email;
        $supplier->status = $this->status;
        $supplier->save();
        $this->Kosongkan();
    }

    public function Add()
    {
        Supplier::create([
            'kode' => $this->kode,
            'nama_supplier' => $this->nama_supplier,
            'alamat' => $this->alamat,
            'kode_pos' => $this->kode_pos,
            'telepon' => $this->telepon,
            'email' => $this->email,
            'status' => $this->status
        ]);
        $this->Kosongkan();
    }
    public function render()
    {
        return view('livewire.master.supplier-controller', [
            'datas' => Supplier::all()
        ])
            ->extends('layout.admin')
            ->section('konten');
    }

    public function Delete(Supplier $id)
    {
        $id->delete();
    }

    public function Kosongkan()
    {
        $this->reset('kode', 'nama_supplier', 'alamat', 'kode_pos', 'telepon', 'email', 'status');
        $this->is_edit = '';
        $this->is_form = '';
        $this->id_supplier = '';
    }
}
