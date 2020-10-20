<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('slug')->unique();

            $table->string('name');
            $table->string('gender');
            $table->string('department');
            $table->string('city');

            // $table->string('designation')->nullable();
            // $table->string('salary')->nullable();
            // $table->string('image')->nullable();
            // $table->string('email')->nullable();
            // $table->string('mobile')->nullable();
            // $table->date('birth_date')->nullable();

            // $table->text('present_address')->nullable();
            // $table->text('permanent_address')->nullable();

            // $table->string('father_name')->nullable();
            // $table->string('mother_name')->nullable();
            // $table->string('spouse_name')->nullable();

    
            // $table->string('created_by')->nullable();
            // $table->string('updated_by')->nullable();

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
        Schema::dropIfExists('employees');
    }
}
