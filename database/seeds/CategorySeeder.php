<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create 2 records of categories
        factory(App\Category::class, 2)->create()->each(function($category){
        //Seed the relation with 3 subcategories
        	$category->subcategories()->saveMany($subcategories);
        });
    }
}
