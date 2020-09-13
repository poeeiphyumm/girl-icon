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
<<<<<<< HEAD
         //$this->call(UserTableSeeder::class);

         //$this->call(CustomerTableSeeder::class);   
          
=======

         //$this->call(UserTableSeeder::class);

         //$this->call(CustomerTableSeeder::class);   
>>>>>>> 0014ba7e10f9f64c2e841d7072dfe0e2fc39d878
}
