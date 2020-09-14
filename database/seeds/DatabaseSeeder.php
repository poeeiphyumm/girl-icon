<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         // $this->call(UserSeeder::class);
         // $this->call(CustomerTableSeeder::class);
        factory(App\Customer::class,5)->create();
        
    }
         //$this->call(UserTableSeeder::class);

         //$this->call(CustomerTableSeeder::class);   
<<<<<<< HEAD
=======
          
>>>>>>> c370591f260ffafd17d5466cec5e4d0d2d0ca533

         //$this->call(UserTableSeeder::class);

         //$this->call(CustomerTableSeeder::class);   
<<<<<<< HEAD

=======
>>>>>>> c370591f260ffafd17d5466cec5e4d0d2d0ca533
}
