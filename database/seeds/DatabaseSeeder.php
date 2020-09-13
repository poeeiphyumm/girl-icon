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
<<<<<<< HEAD
         // $this->call(UserSeeder::class);
         // $this->call(CustomerTableSeeder::class);
        factory(App\Customer::class,5)->create();
    }
=======
         //$this->call(UserTableSeeder::class);

         //$this->call(CustomerTableSeeder::class);   
          }
>>>>>>> d056c456610e9c9c51a748b7a0444981262a4ded
}
