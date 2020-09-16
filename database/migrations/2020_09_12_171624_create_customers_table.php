<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('email')->unique();
            $table->date('date');
            $table->integer('phone_no');
            $table->string('gender');
<<<<<<< HEAD
            $table->string('customer_name');
=======
            $table->string('category_name');
>>>>>>> 1eb3870294832960e6c3a85adbe3667af5fd9a8a
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}