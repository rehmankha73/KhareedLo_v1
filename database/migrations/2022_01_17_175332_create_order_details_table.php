<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();

            $table->foreignId('order_id')
                ->index()
                ->nullable()
                ->constrained('orders')
                ->nullOnDelete();

            $table->foreignId('product_id')
                ->index()
                ->nullable()
                ->constrained('products')
                ->nullOnDelete();

            $table->unsignedInteger('quantity')->default(0);
            $table->decimal('price')->default(0.0);

            $table->decimal('sub_total')->default(0.0);
            $table->decimal('discount')->default(0.0);

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
        Schema::dropIfExists('order_details');
    }
}
