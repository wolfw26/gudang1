<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Barang;
use App\Models\Supplier;
use App\Models\JenisBarang;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('user12345')
        ]);
        User::create([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('user2345')
        ]);
        User::create([
            'name' => 'sales1',
            'email' => 'sales1@gmail.com',
            'role' => 'sales',
            'password' => Hash::make('sales12345')
        ]);
        Supplier::create([
            'kode' => 'IDF0101',
            'nama_supplier' => 'PT. INDOFOOD SUKSES MAKMUR',
            'alamat' => 'Gedung Indofood TowerJl. Jend. Sudirman Kav.76-78, Jakarta',
            'kode_pos' => '62256',
            'telepon' => '-',
            'email' => '-',
            'status' => 'aktif',
        ]);
        Supplier::create([
            'kode' => 'SSR04011',
            'nama_supplier' => 'PT. SINAR SOSRO',
            'alamat' => 'Jl. Raya Bekasi KM.28Cakung Jakarta Timur, Jakarta',
            'kode_pos' => '682256',
            'telepon' => '(021)8840855',
            'email' => '-',
            'status' => 'aktif',
        ]);
        Supplier::create([
            'kode' => 'FLGI043',
            'nama_supplier' => 'PT. FRISIAN FLAG INDONESIA',
            'alamat' => ' Jl. Raya Bogor, KM.5Pasar Rebo, Jakarta Timur',
            'kode_pos' => '682256',
            'telepon' => ' (021) 8410945',
            'email' => '-',
            'status' => 'aktif',
        ]);
        Supplier::create([
            'kode' => 'PPS0653',
            'nama_supplier' => 'PT. PEPSI COLA INDOBEVERAGES',
            'alamat' => 'Indofood Tower Lt.10Jl. Jend. Sudirman Kav.76-78, Jakarta',
            'kode_pos' => '12910',
            'telepon' => '(021) 57958822',
            'email' => '-',
            'status' => 'aktif',
        ]);
        Supplier::create([
            'kode' => 'UNL6564',
            'nama_supplier' => 'PT. UNILEVER INDONESIA',
            'alamat' => ' Wisma Nestle Lt.5, Arkardia Ofiice ParkJl. Letjen TB. Simatupang Kav. 88, Jakarta',
            'kode_pos' => '78836001',
            'telepon' => '(021) 78836000',
            'email' => '-',
            'status' => 'aktif',
        ]);
        Supplier::create([
            'kode' => 'BGS94',
            'nama_supplier' => 'PT. BOGASARI FLOUR MILLS',
            'alamat' => 'Jl. Raya Cilincing No. 1Tanjung Priuk, Jakarta Utara',
            'kode_pos' => '14110',
            'telepon' => '(021) 43900170–4',
            'email' => '-',
            'status' => 'aktif',
        ]);

        JenisBarang::create([
            'nama_jenis' => 'waffer',
            'kode_jenis' => 1312,
        ]);
        JenisBarang::create([
            'nama_jenis' => 'minuman',
            'kode_jenis' => 3333,
        ]);

        Barang::create([
            'kode_barang' => '6731001',
            'nama_barang' => 'roma kelapa',
            'merk' => 'jajan',
            'id_jenis' => 2,
            'id_supplier' => 2,
        ]);
        Barang::create([
            'kode_barang' => '131313',
            'nama_barang' => 'BENG BENG',
            'merk' => '-',
            'id_jenis' => 1,
            'id_supplier' => 1,
        ]);
        Barang::create([
            'kode_barang' => '131314',
            'nama_barang' => 'SILVER QUEEN',
            'merk' => 'Silver Queen',
            'id_jenis' => 1,
            'id_supplier' => 2,
        ]);
        Barang::create([
            'kode_barang' => '131315',
            'nama_barang' => 'YAVA CACAO',
            'merk' => 'Smiles',
            'id_jenis' => 1,
            'id_supplier' => 2,
        ]);
        Barang::create([
            'kode_barang' => '131316',
            'nama_barang' => 'KACANG KORO',
            'merk' => 'Dua Kelinci',
            'id_jenis' => 1,
            'id_supplier' => 2,
        ]);
        Barang::create([
            'kode_barang' => '131317',
            'nama_barang' => 'CHITATO',
            'merk' => 'Indomie',
            'id_jenis' => 1,
            'id_supplier' => 2,
        ]);
    }
}
