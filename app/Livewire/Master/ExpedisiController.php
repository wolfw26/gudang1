<?php

namespace App\Livewire\Master;

use App\Models\Expedisi;
use Livewire\Component;

class ExpedisiController extends Component
{
    public $nama_expedisi, $kode_pos, $alamat_kantor;
    public $is_edit = '';
    public $id_expedisi = '';

    public function edit(Expedisi $id)
    {
        $this->is_edit = true;
        if ($this->is_edit == true) {
            $this->id_expedisi = $id->id;
            $this->nama_expedisi = $id->nama_expedisi;
            $this->kode_pos = $id->kode_pos;
            $this->alamat_kantor = $id->alamat_kantor;
        }
    }
    public function Update()
    {
        $expedisi = Expedisi::find($this->id_expedisi);
        $expedisi->update(
            [
                'nama_expedisi' => $this->nama_expedisi,
                'kode_pos' => $this->kode_pos,
                'alamat_kantor' => $this->alamat_kantor,
            ]
        );
        $this->reset('nama_expedisi', 'kode_pos', 'alamat_kantor');
        $this->is_edit = '';
    }
    public function Add()
    {
        Expedisi::create([
            'nama_expedisi' => $this->nama_expedisi,
            'kode_pos' => $this->kode_pos,
            'alamat_kantor' => $this->alamat_kantor,
        ]);
        $this->reset('nama_expedisi', 'kode_pos', 'alamat_kantor');
    }
    public function Delete($id)
    {
        Expedisi::find($id)->delete();
    }
    public function render()
    {
        return view('livewire.master.expedisi-controller', [
            'datas' => Expedisi::all()
        ])
            ->extends('layout.admin')
            ->section('konten');
    }

    public function ClearAll()
    {
        $this->reset('nama_expedisi', 'kode_pos', 'alamat_kantor');
        $this->is_edit = '';
        $this->id_expedisi = '';
    }
}
