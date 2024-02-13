<?php

namespace App\Livewire\Master;

use App\Models\Jabatan;
use App\Models\StaffGudang;
use Livewire\Component;

class StaffController extends Component
{

    public $is_tambah = False;
    public $is_edit = false;
    public $staffEdit = '';
    public $jabatan, $nama, $kode, $umur, $jk, $ktp, $kk, $alamat, $domisili;

    public function Tambah()
    {
        $this->is_tambah = !$this->is_tambah;
    }
    public function Edit($id)
    {
        $this->is_edit = !$this->is_edit;
        if ($this->is_edit) {
            $dataJabatan = StaffGudang::where('id', $id)->first();
            $this->staffEdit = $id;
            $this->jabatan = $dataJabatan->jabatan_id;
            $this->nama = $dataJabatan->nama;
            $this->kode = $dataJabatan->kode;
            $this->umur = $dataJabatan->umur;
            $this->jk = $dataJabatan->jenis_kelamin;
            $this->ktp = $dataJabatan->no_ktp;
            $this->kk = $dataJabatan->no_kk;
            $this->alamat = $dataJabatan->alamat;
            $this->domisili = $dataJabatan->domisili;
        }
    }

    public function Update()
    {
        $dataStaff = StaffGudang::where('id', $this->staffEdit)->first();
        $dataStaff->jabatan_id = $this->staffEdit;
        $dataStaff->nama = $this->nama;
        $dataStaff->kode = $this->kode;
        $dataStaff->umur = $this->umur;
        $dataStaff->jenis_kelamin = $this->jk;
        $dataStaff->no_ktp = $this->ktp;
        $dataStaff->no_kk = $this->kk;
        $dataStaff->alamat = $this->alamat;
        $dataStaff->domisili = $this->domisili;
        $dataStaff->save();

        $this->is_edit = False;
        $this->staffEdit = '';
        $this->reset('jabatan', 'nama', 'kode', 'umur', 'jk', 'ktp', 'kk', 'alamat', 'domisili');
    }

    public function Add()
    {
        StaffGudang::create([
            'users_id' => null,
            'jabatan_id' => $this->jabatan,
            'nama' => $this->nama,
            'kode' => $this->kode,
            'umur' => $this->umur,
            'jenis_kelamin' => $this->jk,
            'no_ktp' => $this->ktp,
            'no_kk' => $this->kk,
            'alamat' => $this->alamat,
            'domisili' => $this->domisili,
        ]);

        $this->reset('jabatan', 'nama', 'kode', 'umur', 'jk', 'ktp', 'kk', 'alamat', 'domisili');
    }

    public function Destroy(StaffGudang $id)
    {
        $id->delete();
    }
    public function render()
    {
        return view('livewire.master.staff-controller', [
            'jabatans' => Jabatan::all(),
            'datas' => StaffGudang::all()
        ])
            ->extends('layout.admin')
            ->section('konten');
    }
}
