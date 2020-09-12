<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('appointment_name');
            $table->date('date');
            $table->time('time');
            $table->string('appointment_status');

            $table->unsignedBigInteger('customer_id');
            $table->timestamps();

            $table->foreign('customer_id')
                    ->references('id')
                    ->on('customers')
                    ->onDelete('cascade');

<<<<<<< HEAD

=======
<<<<<<< HEAD
>>>>>>> 9b4f80806c8fe5c85b50ba3be7c9844036ee361e
        // Schema::create('appointments', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('customer_name');
        //     $table->string('employee_name');
        //     $table->date('date');
        //     $table->integer('time');
        //     $table->string('status');
            
        //     $table->unsignedBigInteger('customer_id');
        //     $table->unsignedBigInteger('employee_id');
        //     $table->foreign ('customer_id')
        //             ->references('id')
        //             ->on('customers')
        //             ->onDelete('cascade');
        //      $table->foreign ('employee_id')
        //             ->references('id')
        //             ->on('employees')
        //             ->onDelete('cascade');
        //     $table->timestamps();
<<<<<<< HEAD
=======

>>>>>>> 9b4f80806c8fe5c85b50ba3be7c9844036ee361e
        });
=======
            });
>>>>>>> c5cc876b2f99bf14e61612310435ffbbd7784e2c
    }
        
       

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
