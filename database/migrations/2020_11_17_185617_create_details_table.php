<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('provider');
            $table->string('product');
            $table->decimal('price');
            $table->integer('quantity');
            $table->string('um');
            $table->decimal('amount');
            $table->decimal('tax');
            $table->decimal('taxTotal');
            $table->decimal('total');
            $table->foreignId('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->string('bank_id');
            $table->string('orderCode');
            $table->string('pay');
            $table->string('archive');
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
        Schema::dropIfExists('details');
    }
}
