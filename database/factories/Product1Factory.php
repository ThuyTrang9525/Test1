<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product1;
use App\Models\Categories;

class Product1Factory extends Factory
{
    protected $model = Product1::class;

    public function definition()
    {
        return [
            'name'         => $this->faker->unique()->word,
            'price'        => $this->faker->randomFloat(2, 10000, 50000000),
            'image'        => $this->faker->imageUrl(200, 200, 'technics'),
            'cate_id'      => Category::inRandomOrder()->first()->id ?? 1, // Lấy ngẫu nhiên 1 category
            'website'      => $this->faker->url,
            'email'        => $this->faker->unique()->safeEmail,
            'company_name' => $this->faker->company,
            'address'      => $this->faker->address,
            'created_at'   => now(),
            'updated_at'   => now(),
        ];
    }
}
