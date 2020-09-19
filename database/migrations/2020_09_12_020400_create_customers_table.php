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
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('date');
            $table->integer('phone');
            // $table->string('service');
            $table->string('gender');
            $table->string('note');
            $table->timestamps();

            $table->unsignedBigInteger('service_id');

            $table->unsignedBigInteger('employee_id');

            $table->foreign('service_id')
                    ->references('id')
                    ->on('services')
                    ->onDelete('cascade');

            $table->foreign('employee_id')
                    ->references('id')
                    ->on('employees')
                    ->onDelete('cascade');
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
