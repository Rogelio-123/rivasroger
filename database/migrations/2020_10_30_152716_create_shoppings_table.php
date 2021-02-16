<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoppings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provider_id')->references('id')->on('providers');
            $table->string('pay');
            $table->string('bank');
            $table->string('pName');
            $table->string('price');
            $table->string('quantity');
            $table->decimal('subtotal');
            $table->decimal('tax');
            $table->decimal('taxTotal');
            $table->decimal('total');
            $table->decimal('payment');
            $table->decimal('debt');
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
        Schema::dropIfExists('shoppings');
    }
}
