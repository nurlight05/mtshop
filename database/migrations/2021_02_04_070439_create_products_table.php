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
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('vcode');
            $table->foreignId('category_id')->constrained('categories');
            // attributes
            // images
            $table->text('description');
            $table->integer('price');
            // type: 1 - new, 2 - hit, 3 - discount
            $table->enum('type', [1, 2, 3]);
            $table->integer('discount')->nullable()->default(null);
            $table->integer('quantity')->default(0);
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
