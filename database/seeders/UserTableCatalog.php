<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableCatalog extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     DB::table('products')->insert([
            'name_produk' => 'Agustin',
            'sub_judul' => 'ganteng',
            'price' => '100.000',
            'description' => 'Agustin',
            'image' => 'Agustin',
        ]);
}
}
