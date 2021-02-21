<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Detectives'],
            ['name' => 'Drama'],
            ['name' => 'Classic'],
            ['name' => 'Medicine'],
            ['name' => 'Adventures'],
            ['name' => 'Novels'],
            ['name' => 'Fantasy'],
            ['name' => 'Horrors'],
        ]);
    }
}
