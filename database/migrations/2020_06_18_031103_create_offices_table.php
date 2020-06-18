<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->string("officeCode", 100)->unique;
            $table->string('city', 100)->nullable;
            $table->string('phone', 100)->nullable;
            $table->string('addressLine1', 250)->nullable;
            $table->string('addressLine2', 250)->nullable;
            $table->string('state', 100)->nullable;
            $table->string('country', 100)->nullable;
            $table->string('postalCode', 100)->nullable;
            $table->string('territory', 100)->nullable; 
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
        Schema::dropIfExists('offices');
    }
}
