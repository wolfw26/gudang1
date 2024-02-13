<?php

namespace App\Livewire\Master;

use App\Models\Jabatan;
use Livewire\Attributes\Validate;
use Livewire\Component;

class JabatanController extends Component
{
    #[Validate('required|unique:jabatan,kode_jabatan')]
    public $kd_jabatan = '';

    public $nm_jabatan = '';
    public $is_edit = False;
    public $id_jabatan = '';

    public function Edit(Jabatan $id)
    {
        $this->is_edit = True;
        if ($this->is_edit) {
            $this->id_jabatan = $id->id;
            $this->kd_jabatan = $id->kode_jabatan;
            $this->nm_jabatan = $id->nama_jabatan;
        }
    }
    public function Cancel()
    {
        $this->id_jabatan = '';
        $this->reset('kd_jabatan', 'nm_jabatan', 'is_edit');
    }
    public function Update()
    {
        $jb = Jabatan::find($this->id_jabatan);
        $jb->kode_jabatan = $this->kd_jabatan;
        $jb->nama_jabatan = $this->nm_jabatan;
        $jb->save();
        $this->id_jabatan = '';
        $this->reset('kd_jabatan', 'nm_jabatan', 'is_edit');
    }

    public function Add()
    {
        $CekKode = Jabatan::where('kode_jabatan', $this->kd_jabatan)->exists();
        if ($CekKode) {
            $this->addError('kd_jabatan', 'Kode sudah ada dalam data.');
            $this->reset('kd_jabatan', 'nm_jabatan');
            return;
        } else {
            Jabatan::create([
                'kode_jabatan' => $this->kd_jabatan,
                'nama_jabatan' => $this->nm_jabatan
            ]);
            $this->reset('kd_jabatan', 'nm_jabatan');
        }
    }

    public function Delete(Jabatan $id)
    {
        $id->delete();
    }
    public function render()
    {
        return view('livewire.master.jabatan-controller', [
            'data' => Jabatan::all()
        ])
            ->extends('layout.admin')
            ->section('konten');
    }
}
