<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ✅ Thêm để sử dụng DB::table()
use App\Models\Product1;  
use App\Models\Categories;  // ✅ Đảm bảo tên model khớp với file model

class Product1Seeder extends Seeder
{
    public function run(): void
    {
        // Kiểm tra danh mục có tồn tại không
        $category = Categories::where('name', 'Điện thoại')->first();  

        if ($category) {
            // Tạo 100 sản phẩm
            for ($i = 1; $i <= 100; $i++) {
                Product1::create([
                    'name'         => "Sản phẩm $i",
                    'price'        => rand(50000, 500000), // Giá ngẫu nhiên từ 50,000 đến 500,000
                    'image'        => "https://via.placeholder.com/200?text=SP$i",
                    'cate_id'      => 1, // ✅ Lấy ID thực tế của danh mục
                    'website'      => "https://example.com/sp$i",
                    'email'        => "sp$i@example.com",
                    'company_name' => "Công ty số $i",
                    'address'      => "Địa chỉ số $i",
                ]);
            }
        } else {
            echo "⚠️ Chưa có danh mục 'Điện thoại', hãy chạy CategoriesSeeder trước!\n";
        }
    }
}
