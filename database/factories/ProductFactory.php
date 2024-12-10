<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Color;
use App\Models\Size;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(10);

        return [
            'category_id' => $this->faker->numberBetween(1, Category::count()),
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->paragraph(5),
            'discount' => $this->faker->randomFloat(2, 5, 10),
            'status' => $this->faker->boolean(70),
        ];
    }

    public function configure():static
    {
        return $this->afterCreating(function (Product $product) {
            $colors = Color::all();
            $sizes = Size::all();

            foreach ($colors as $color) {
                foreach ($sizes as $size) {
                    ProductDetail::create([
                        'product_id' => $product->id,
                        'color_id' => $color->id,
                        'size_id' => $size->id,
                        'price' => $this->faker->numberBetween(500, 6000),
                        'stock' => $this->faker->numerify('###'),
                    ]);
                }
            }
        });
    }
}
