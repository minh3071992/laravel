<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('productCode', 100)->unique;
            $table->string('productName', 100);
            $table->foreignId('productLine');
            $table->string('productScale', 100);
            $table->string('productVendor', 100);
            $table->string('productDescription', 100);
            $table->bigInteger('quantityInStock');
            $table->float('buyPrice', 10, 2);
            $table->string('MSRP', 100);
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
        Schema::dropIfExists('products');
    }
}
