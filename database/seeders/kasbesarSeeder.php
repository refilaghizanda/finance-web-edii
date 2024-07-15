<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kasbesarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kaskecils')->insert([
            'no_bukti' => 'RFL27BSR',
            'tanggal' => now(),
            'kategori' => '-',
            'keterangan' => 'Untuk konsumsi',
            'saldo_awal' => '2000000',
            'nominal_transaksi' => '1500000',
            'sisa_saldo' => '500000',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
