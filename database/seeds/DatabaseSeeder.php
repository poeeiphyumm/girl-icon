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
          $this->call(CustomerTableSeeder::class);
       // factory(App\Customer::class,5)->create();
        
    }
         //$this->call(UserTableSeeder::class);

<<<<<<< HEAD
        // $this->call(CustomerTableSeeder::class);   
          
=======
         //$this->call(CustomerTableSeeder::class);   
<<<<<<< HEAD
=======
          
>>>>>>> c370591f260ffafd17d5466cec5e4d0d2d0ca533
>>>>>>> 54b5126ee6bd48455d97390fb11888da844304eb

         //$this->call(UserTableSeeder::class);

         //$this->call(CustomerTableSeeder::class);   
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> c370591f260ffafd17d5466cec5e4d0d2d0ca533
>>>>>>> 54b5126ee6bd48455d97390fb11888da844304eb
}
