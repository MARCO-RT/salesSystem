<?php

use Illuminate\Database\Seeder;
use App\Core\Product\Product;
use App\Core\Picture\Picture;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 1000; $i++) {
            $name = $faker->name;
            $product = Product::create(array(
                'category_id' => $faker->numberBetween(1,12),
                'code' => $faker->ean13,
                'name' => $name,
                'slug' => str_slug($name, "-"),
                'price' => $faker->randomFloat(2,30,150),
                'stock' => $faker->numberBetween(20,100),
                'condition' => $faker->numberBetween(1,2),
                'views' => 0,
                'description' => $faker->text
            ));

            for($j=0; $j< $faker->numberBetween(3,5); $j++){
                Picture::create(array(
                    'product_id' => $product->id,
                    'url' => 'media/products/img_'.$faker->numberBetween(1,100).'.jpg',
                    'type' => $faker->mimeType
                ));
            }
        }
    }
}



