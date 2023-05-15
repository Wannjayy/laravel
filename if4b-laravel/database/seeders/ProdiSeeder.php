<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prodi')->insert(
        [
                [
                    //'id' => Str::uuid(),
                    'id' => Uuid::uuid4(),
                    'nama_prodi' => 'Sistem Informasi',
                    'fakultas_id' => 'da4d128e-4ed0-4935-83de-71bfbb0a818c',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'id' => Uuid::uuid4(),
                    'nama_prodi' => 'Informatika',
                    'fakultas_id' => 'da4d128e-4ed0-4935-83de-71bfbb0a818c',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    //'id' => Str::uuid(),
                    'id' => Uuid::uuid4(),
                    'nama_prodi' => 'Akuntansi',
                    'fakultas_id' => 'd94f4283-36d7-4b1d-a8aa-3c1edd88eac3',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'id' => Uuid::uuid4(),
                    'nama_prodi' => 'Manajemen',
                    'fakultas_id' => 'd94f4283-36d7-4b1d-a8aa-3c1edd88eac3',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]
        ]);
    }
}
