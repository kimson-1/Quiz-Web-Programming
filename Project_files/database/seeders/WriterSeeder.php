<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Writer::create([
            'Name' => 'Ahmed Bayu',
            'image' => 'assets/profile/ahmed.jpg',
            'specialist'=> 'Spesialis Data Science'
        ]);

        Writer::create([
            'Name' => 'Caca Daniel',
            'image' => 'assets/profile/caca.jpg',
            'specialist'=> 'Spesialis Network Security'
        ]);

        Writer::create([
            'Name' => 'Dedi Endo',
            'image' => 'assets/profile/dedi.jpg',
            'specialist'=> 'Spesialis Network Security'
        ]);
    }
}
