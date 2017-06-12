<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         //
         $cate_one = new Category();
         $cate_one->slug = 'laravel';
         $cate_one->name = 'Laravel';
         $cate_one->save();

         $cate_two = new Category();
         $cate_two->slug = 'php';
         $cate_two->name = 'PHP';
         $cate_two->save();
     }
}
