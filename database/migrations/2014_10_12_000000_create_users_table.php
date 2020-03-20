<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('description', 100);
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('dpi')->unique()->nullable();
            $table->string('name');
            $table->string('lastname', 100)->nullable();
            $table->string('email')->unique();
            $table->integer('phone')->unique();
            $table->string('url_image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('check_terms');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedInteger('role_id');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')
                ->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

      Schema::dropIfExists('users');
      Schema::dropIfExists('status');        
    }
}
