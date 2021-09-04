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
            $table->string("Artist_Name");
            $table->string("Artwork_Name");
            $table->string("Price");
            $table->string("Material");
            $table->string("Dimension");
            $table->string("Colour");
            $table->string("Brand");
            $table->string("Description");
            $table->string("Gallery");
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
