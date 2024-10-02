<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Ensure this line is present
use Carbon\Carbon;

class MasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('masuks')->insert([
            [
                'kd_masuk' => 'KM01',         // Example kd_masuk
                'tgl_masuk' => Carbon::now()->format('Y-m-d'), // Today's date
                'kd_admin' => 'KA01',         // Example kd_admin
                'kd_supplier' => 'KS10',      // Fixed kd_supplier
                'total_masuk' => 10,            // Example total_masuk
                'created_at' => now(),          // Laravel will automatically manage timestamps
                'updated_at' => now(),
            ],
            [
                'kd_masuk' => 'KM02',         // Example kd_masuk
                'tgl_masuk' => Carbon::now()->format('Y-m-d'), // Today's date
                'kd_admin' => 'KDA02',         // Example kd_admin
                'kd_supplier' => 'KS11',      // Fixed kd_supplier
                'total_masuk' => 5,            // Example total_masuk
                'created_at' => now(),          // Laravel will automatically manage timestamps
                'updated_at' => now(),
            ],
            [
                'kd_masuk' => 'KM03',         // Example kd_masuk
                'tgl_masuk' => Carbon::now()->format('Y-m-d'), // Today's date
                'kd_admin' => 'KA03',         // Example kd_admin
                'kd_supplier' => 'KS12',      // Fixed kd_supplier
                'total_masuk' => 5,            // Example total_masuk
                'created_at' => now(),          // Laravel will automatically manage timestamps
                'updated_at' => now(),
            ],
            // Add more entries as needed...
        ]);
    }
}
