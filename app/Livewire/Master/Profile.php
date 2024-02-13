<?php

namespace App\Livewire\Master;

use App\Models\Jabatan;
use App\Models\StaffGudang;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public $staffExist = False;
    public $nama, $kode, $umur, $jenis_kelamin, $ktp, $kk, $alamat, $domisili, $jabatan;

    public function Add()
    {
        StaffGudang::create([
            'users_id' => Auth::user()->id,
            'jabatan_id' => $this->jabatan,
            'nama' => $this->nama,
            'kode' => $this->kode,
            'umur' => $this->umur,
            'jenis_kelamin' => $this->jenis_kelamin,
            'no_ktp' => $this->ktp,
            'no_kk' => $this->kk,
            'alamat' => $this->alamat,
            'domisili' => $this->domisili,
        ]);
    }
    public function render()
    {
        $query = StaffGudang::where('users_id', Auth::user()->id)->first();
        $data = '';
        if ($query) {
            $this->staffExist = True;
            $data = $query;
        }
        return view('livewire.master.profile', [
            'data' => $data,
            'jabatans' => Jabatan::all()
        ])
            ->extends('layout.admin')
            ->section('konten');
    }
}
