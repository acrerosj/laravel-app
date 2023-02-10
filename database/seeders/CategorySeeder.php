<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $categories = [
            ['id'=> 1, 'name'=>'Bebida'],
            ['id'=> 2, 'name'=>'Comida'],
            ['id'=> 3, 'name'=>'Gourmet'],
            ['id'=> 4, 'name'=>'Limpieza'],
            ['id'=> 5, 'name'=>'Mascotas'],
        ];
        DB::table('categories')->insert($categories);
    }
}
