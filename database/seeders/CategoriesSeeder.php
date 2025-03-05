<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Điện thoại',
                'discription' => 'Danh mục điện thoại', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laptop',
                'discription' => 'Danh mục laptop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Máy tính bảng',
                'discription' => 'Danh mục máy tính bảng',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
