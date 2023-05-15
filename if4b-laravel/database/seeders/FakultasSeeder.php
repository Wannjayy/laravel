<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fakultas')->insert(
        [
                [
                    //'id' => Str::uuid(),
                    'id' => Uuid::uuid4(),
                    'nama_fakultas' => 'Fakultas Ilmu Komputer dan Rekayasa',
                    'nama_dekan' => 'Dr.Wijang Widhiarso, M.Kom.',
                    'nama_wakil_dekan' => 'Yoannita, M.Kom.',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'id' => Uuid::uuid4(),
                    'nama_fakultas' => 'Fakultas Ilmu Ekonomi dan Bisnis',
                    'nama_dekan' => 'Dr.Yulizar Kasih,S.E.,M.Si.',
                    'nama_wakil_dekan' => 'Dr. Anton Arisman, S.E.,M.Si',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]
        ]);

        // $this->call([
        //     FakultasSeeder::class
        // ]);
    }
}
