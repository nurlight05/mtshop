<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable()->default(null);
            $table->enum('delivery_type', [1,2])->default(1);
            $table->integer('delivery_price')->default(0);
            $table->string('city')->nullable()->default(null);
            $table->string('street')->nullable()->default(null);
            $table->string('apartment')->nullable()->default(null);
            $table->boolean('paid')->default(false);
            $table->string('url')->nullable()->default(null);
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
        Schema::dropIfExists('orders');
    }
}
