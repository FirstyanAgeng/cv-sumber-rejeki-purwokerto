<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'name' => 'Company',
            'description' => 'lorem',
            'logo' => 'logo.png',
            'alamat' => 'purwokerto',
            'email' => 'andi@gmail.com',
            'telepon' => '00232',
            'maps_embed' => 'google.maps.com'
        ]);
    }
}
