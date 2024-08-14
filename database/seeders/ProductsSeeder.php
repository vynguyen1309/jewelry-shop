<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        for ($i = 0; $i < 30; $i++) {
            DB::table('products')->insert(
                [
                    'pr_name' => $faker->text(20),
                    'thumbnail' => 'https://www.cartier.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw86c0c2e1/images/large/dc779512cf455039b3d66d5a66c031e8.png?sw=2000&sh=2000&sm=fit&sfrm=png',
                    'price' => rand(100000,10000000),
                    'quantity' => rand(20,100),
                    'description'=>$faker->text(50),
                    'size'=>rand(7,10),
                    'category_id' => rand(1,5),
                ]
            );
    }}
}
