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
            $table->decimal('unit_price')->default(0.0);
            $table->decimal('whole_sale_price')->default(0.0);
            $table->unsignedInteger('initial_stock')->default(0);
            $table->unsignedInteger('current_stock')->default(10);
            $table->string('brand')->nullable();

            // Product Variants
            $table->text('colors')->nullable();
            $table->text('sizes')->nullable();
            $table->text('others')->nullable();

            $table->boolean('in_stock')->default(true);
            $table->string('featured_image')->nullable();
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();

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
