<?php

use App\Models\ProductCategory;
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
        Schema::create('products', static function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(ProductCategory::class)
                ->index()
                ->constrained()
                ->cascadeOnDelete();

            $table->string('product_code');
            $table->string('name');
            $table->string('description')->nullable();
            $table->decimal('price')->default(0.0);
            $table->decimal('wholesale_price')->default(0.0);
            $table->decimal('discount')->default(0.0);
            $table->unsignedInteger('stock')->default(0);
            $table->unsignedInteger('mini_stock')->default(10);

            $table->boolean('in_stock')->default(true);

            // Seo related tags
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();

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
