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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('url_image')->nullable();
            $table->string('url')->unique();
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id')
                ->references('id')->on('status');
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->string('sku')->nullable()->unique();
            $table->string('url')->unique();
            $table->text('information');
            $table->text('objective');
            $table->text('details');
            $table->text('specs');
            $table->string('url_image')->nullable();
            $table->string('url_video')->nullable();
            $table->float('price')->nullable();
            $table->integer('type_id');
            $table->unsignedBigInteger('supplier_id')->nullable();
            $table->foreign('supplier_id')
                ->references('id')->on('suppliers');
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id')
                ->references('id')->on('status');
            $table->string('reference_link')->nullable();
            $table->timestamps();
        });


        Schema::create('category_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')
                ->references('id')->on('categories');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')
                ->references('id')->on('products');
            $table->timestamps();
        });

        Schema::create('product_subcategory', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->foreign('subcategory_id')
                ->references('id')->on('subcategories');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')
                ->references('id')->on('products');
            $table->timestamps();
        });

        Schema::create('product_rating', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rating_id')->nullable();
            $table->foreign('rating_id')
                ->references('id')->on('ratings');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')
                ->references('id')->on('products');
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
        Schema::dropIfExists('product_rating');
        Schema::dropIfExists('category_product');
        Schema::dropIfExists('product_subcategory');
        Schema::dropIfExists('products');
        Schema::dropIfExists('suppliers');
    }
}
