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
        Schema::create('orders', static function (Blueprint $table) {
            $table->id();

            $table->foreignId('customer_id')
                ->index()
                ->nullable()
                ->constrained('customers')
                ->nullOnDelete();

            $table->decimal('sub_total')->default(0.0);
            $table->decimal('discount')->default(0.0);
            $table->decimal('total')->default(0.0);
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
