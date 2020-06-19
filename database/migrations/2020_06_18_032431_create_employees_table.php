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
        Schema::create('employess', function (Blueprint $table) {
            $table->id();
            $table->string('employeeNumber', 100);
            $table->string('lastName', 100);
            $table->string('firstName', 100);
            $table->string('extension', 100);
            $table->string('email', 100)->unique;
            $table->foreignId('officeCode');
            $table->foreignId('reportsTo');
            $table->string('jobTitle', 100);
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
        Schema::dropIfExists('employess');
    }
}
