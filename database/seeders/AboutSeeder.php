<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'judul' => 'testing',
            'subjudul' => 'testing',
            'deskripsi_1' => 'testing',
            'deskripsi_2' => 'testing',
            'kelebihan_1' => 'testing',
            'kelebihan_2' => 'testing',
            'kelebihan_3' => 'testing',
            'kelebihan_4' => 'testing',
        ]);
    }
}
