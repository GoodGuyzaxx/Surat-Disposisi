<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategoris')->insert([
           'no_kode' => '000',
           'jenis_kode' => 'Umum',
           'created_at' => Carbon::now()
        ]);

        DB::table('kategoris')->insert([
            'no_kode' => "100",
            'jenis_kode' => 'Pemerintahan',
            'created_at' => Carbon::now()
        ]);

        DB::table('kategoris')->insert([
            'no_kode' => "200",
            'jenis_kode' => 'Politik',
            'created_at' => Carbon::now()
        ]);

        DB::table('kategoris')->insert([
            'no_kode' => "300",
            'jenis_kode' => 'Keamanan dan Pemerintahaan',
            'created_at' => Carbon::now()
        ]);

        DB::table('kategoris')->insert([
            'no_kode' => "400",
            'jenis_kode' => 'Kesejaterhan Rakyat',
            'created_at' => Carbon::now()
        ]);

        DB::table('kategoris')->insert([
            'no_kode' => "500",
            'jenis_kode' => 'Perekonomian',
            'created_at' => Carbon::now()
        ]);

        DB::table('kategoris')->insert([
            'no_kode' => "600",
            'jenis_kode' => 'Pekerjaan Umum dan Ketenganan',
            'created_at' => Carbon::now()
        ]);

        DB::table('kategoris')->insert([
            'no_kode' => "700",
            'jenis_kode' => 'Pengawasan',
            'created_at' => Carbon::now()
        ]);

        DB::table('kategoris')->insert([
            'no_kode' => "800",
            'jenis_kode' => 'Kepegawaian',
            'created_at' => Carbon::now()
        ]);

        DB::table('kategoris')->insert([
            'no_kode' => "900",
            'jenis_kode' => 'Keuangan',
            'created_at' => Carbon::now()
        ]);
    }
}
