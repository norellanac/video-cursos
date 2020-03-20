<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokenTransactionsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tokens');
            $table->integer('used_tkns');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')
                ->references('id')->on('status');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->timestamps();
            $table->bigInteger('tx_usr_id')->nullable();
        });

        Schema::create('transactions_tokens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tokens');
            $table->unsignedBigInteger('credit_user');
            $table->foreign('credit_user')
                ->references('id')->on('users');
            $table->unsignedBigInteger('debit_user');
            $table->foreign('debit_user')
                ->references('id')->on('users');
            $table->timestamps();
            $table->bigInteger('tx_usr_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions_tokens');
        Schema::dropIfExists('wallets');
    }
}