<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product1;

class Product1Seeder extends Seeder
{
    public function run()
    {
        Product1::factory()->count(100)->create(); // Tạo 100 dòng dữ liệu
    }
}
