<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('service_details', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('service_id');
        //     $table->unsignedBigInteger('employee_id');
        //     $table->string('service_name')
        //     $table->timestamps();
            
        //     $table->foreign('service_id')
        //             ->references('id')
        //             ->on('services')
        //             ->onDelete('cascade');

        //     $table->foreign('employee_id')
        //             ->references('id')
        //             ->on('employees')
        //             ->onDelete('cascade');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_details');
    }
}
