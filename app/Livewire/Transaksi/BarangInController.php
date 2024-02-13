<?php

namespace App\Livewire\Transaksi;

use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\Detail_barang_masuk;
use App\Models\Stok;
use App\Models\Supplier;
use App\Models\TransaksiStok;
use Illuminate\Support\Carbon;
use Livewire\Component;

class BarangInController extends Component
{
    public $kode_container, $supplier;
    public $is_form = '';
    public $is_edit = '';
    public $id_edit = '';
    public $forms = [];
    public $detail;
    public $is_detail = false;

    public function Detail($id)
    {
        $this->is_detail = True;
        if ($this->is_detail) {
            $this->detail = Detail_barang_masuk::where('barang_masuk_id', $id)->get();
        }
    }


    public function Add()
    {
        $data = BarangMasuk::create([
            'supplier' => $this->supplier,
            'kode_container' => $this->kode_container,
            'tanggal_masuk' => Carbon::now('Asia/jakarta')
        ]);

        if ($this->forms >= 1) {
            foreach ($this->forms as $index => $frm) {
                $barangId = intval($frm['barang']);
                Detail_barang_masuk::create([
                    'barang_masuk_id' => $data->id,
                    'barang_id' => $barangId,
                    'jumlah' => $frm['jumlah']
                ]);

                $stok = Stok::where('barang_id', $barangId)->first();
                // Jika data barang dalam table stok sudah ada,
                if ($stok) {
                    $stok->total_awal = $stok->total;
                    $stok->total = $stok->total + $frm['jumlah'];
                    $stokSave = $stok->save();
                    TransaksiStok::create([
                        'stok_id' => $stok->id,
                        'tipe_transaksi' => 'masuk',
                        'jumlah' => $frm['jumlah'],
                        'tanggal' => Carbon::now('Asia/Jakarta')
                    ]);
                } else {
                    $Save = Stok::create([
                        'barang_id' => $barangId,
                        'total_awal' => 0,
                        'total' => $frm['jumlah'],

                    ]);
                    TransaksiStok::create([
                        'stok_id' => $Save->id,
                        'tipe_transaksi' => 'masuk',
                        'jumlah' => $frm['jumlah'],
                        'tanggal' => Carbon::now('Asia/Jakarta')
                    ]);
                }
            }
        }
    }

    public function Update()
    {
        if ($this->is_edit) {
            BarangMasuk::where('id', $this->id_edit)
                ->update([
                    'id_barang' => $this->barang,
                    'jumlah' => $this->jumlah,
                    'kode_container' => $this->kode_container,
                ]);
            $this->reset('barang', 'jumlah', 'kode_container');
            $this->is_edit = '';
            $this->id_edit = '';
        }
    }
    public function Destroy(BarangMasuk $id)
    {
        $id->delete();
    }


    public function render()
    {
        return view('livewire.transaksi.barang-in-controller', [
            'datas' => BarangMasuk::all(),
            'barangs' => Barang::all(),
            'suppliers' => Supplier::all()
        ])
            ->extends('layout.admin')
            ->section('konten');
    }
    //--------------------------------------------------------------------------------
    // Fungsi Tombol
    public function addForm()
    {
        $this->forms[] = ['barang' => null, 'jumlah' => 0];
    }
    public function clear()
    {
        array_pop($this->forms);
    }


    public function tambah()
    {
        $this->is_form = !$this->is_form;
        // $this->forms = ['barang' => '', 'jumlah' => 0];
    }
    public function edit(BarangMasuk $id)
    {
        // $this->is_form = true;
        // $this->is_edit = true;
        // if ($this->is_edit && $this->is_form) {
        //     $this->id_edit = $id->id;
        //     $this->barang = $id->id_barang;
        //     $this->jumlah = $id->jumlah;
        //     $this->kode_container = $id->kode_container;
        // }
    }
}
