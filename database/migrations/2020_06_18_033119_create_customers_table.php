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
            $table->string('customerNumber', 100)->unique;
            $table->string('customerName', 100)->nullable;
            $table->string('contactLastName', 100)->nullable;
            $table->string('contactFirstName', 100)->nullable;
            $table->string('phone', 100)->nullable;
            $table->string('addressLine1', 100)->nullable;
            $table->string('addressLine2', 100)->nullable;
            $table->string('city', 100)->nullable;
            $table->string('state', 100)->nullable;
            $table->string('postalCode', 100)->nullable;
            $table->string('country', 100)->nullable;
            $table->foreignId('salesRepEmployeeNumber');
            $table->float('creditLimit', 10, 2);
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
