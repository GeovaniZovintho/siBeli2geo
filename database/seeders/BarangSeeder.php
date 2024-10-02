<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kd_barang' => 'B0001',
                'nama_barang' => 'Kaos Polos',
                'satuan' => 1,  // pcs
                'hargajual' => 150000,
                'hargabeli' => 100000,
                'stok' => 50,
                'status' => 'available',
            ],
            [
                'kd_barang' => 'B0002',
                'nama_barang' => 'Celana Jeans',
                'satuan' => 1,  // pcs
                'hargajual' => 250000,
                'hargabeli' => 200000,
                'stok' => 30,
                'status' => 'available',
            ],
            [
                'kd_barang' => 'B0003',
                'nama_barang' => 'Jaket Kulit',
                'satuan' => 1,  // pcs
                'hargajual' => 500000,
                'hargabeli' => 450000,
                'stok' => 15,
                'status' => 'available',
            ],
            [
                'kd_barang' => 'B0004',
                'nama_barang' => 'Topi Baseball',
                'satuan' => 1,  // pcs
                'hargajual' => 75000,
                'hargabeli' => 50000,
                'stok' => 100,
                'status' => 'available',
            ],
            [
                'kd_barang' => 'B0005',
                'nama_barang' => 'Sweater Rajut',
                'satuan' => 1,  // pcs
                'hargajual' => 300000,
                'hargabeli' => 250000,
                'stok' => 20,
                'status' => 'available',
            ],
            [
                'kd_barang' => 'B0006',
                'nama_barang' => 'Sepatu Sneaker',
                'satuan' => 1,  // pcs
                'hargajual' => 400000,
                'hargabeli' => 350000,
                'stok' => 25,
                'status' => 'available',
            ],
            [
                'kd_barang' => 'B0007',
                'nama_barang' => 'Tas Ransel',
                'satuan' => 1,  // pcs
                'hargajual' => 350000,
                'hargabeli' => 300000,
                'stok' => 18,
                'status' => 'available',
            ],
            [
                'kd_barang' => 'B0008',
                'nama_barang' => 'Kemeja Flanel',
                'satuan' => 1,  // pcs
                'hargajual' => 200000,
                'hargabeli' => 150000,
                'stok' => 40,
                'status' => 'available',
            ],
            [
                'kd_barang' => 'B0009',
                'nama_barang' => 'Sandal Jepit',
                'satuan' => 1,  // pcs
                'hargajual' => 50000,
                'hargabeli' => 30000,
                'stok' => 120,
                'status' => 'available',
            ],
            [
                'kd_barang' => 'B0010',
                'nama_barang' => 'Celana Pendek',
                'satuan' => 1,  // pcs
                'hargajual' => 150000,
                'hargabeli' => 100000,
                'stok' => 60,
                'status' => 'available',
            ],
        ]);
        
    }
}
