<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert(
            [
                ['cate_name'=>'Ring'],
                ['cate_name'=>'Bracelet'],
                ['cate_name'=>'Necklace'],
                ['cate_name'=>'Earrings'],
                ['cate_name'=>'Anklet'],
            ]
        );
    }
}
