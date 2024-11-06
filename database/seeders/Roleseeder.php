<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(["name" => "Pustakawan"]);
        Permission::create(["name" => "edit_user"]);
        Role::create(["name" => "mahasiswa"]);
        Permission::create(["name" => "view_book"]);

    }
}
