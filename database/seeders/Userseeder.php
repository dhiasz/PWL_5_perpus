<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'pustakawan',
            'email' => 'pustakawan@unsur.ac.id',
        ])->assignRole('pustakawan');
        User::factory()->create([
            'name' => 'mahasiswa',
            'email' => 'mahasiswa@unsur.ac.id',
        ])->asiignRole('mahasiswa');

    }
}