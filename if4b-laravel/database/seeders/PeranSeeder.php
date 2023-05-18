<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('peran')->insert(
            [
                    [
                        'nama' => 'Admin',
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    [
                        'nama' => 'Dosen',
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    [
                        'nama' => 'Mahasiswa',
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]
            ]);
    }
}
