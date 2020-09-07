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
            $table->string('description');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('url_image')->nullable();
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id')
                ->references('id')->on('status');
            $table->timestamps();
        });
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 250);
            $table->string('description', 250);
            $table->text('information');
            $table->text('objective');
            $table->text('details');
            $table->text('audiencie');
            $table->integer('type_id');
            $table->string('reference_link', 250)->nullable();
            $table->string('featured_image')->nullable();
            $table->string('featured_video')->nullable();
            $table->float('price')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')
                ->references('id')->on('categories');
                $table->unsignedBigInteger('supplier_id')->nullable();
            $table->foreign('supplier_id')
                ->references('id')->on('suppliers');
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id')
                ->references('id')->on('status');
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
        Schema::dropIfExists('suppliers');
    }
}
