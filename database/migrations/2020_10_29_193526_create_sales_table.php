<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {

            // $table->foreignId('costumer_id')->references('id')->on('costumers');
            // $table->string('wayToPay');
            // $table->date('date');
            // $table->string('service');
            // $table->text('description');
            // $table->decimal('price');
            // $table->integer('quantity');
            // $table->decimal('subtotal');
            // $table->decimal('tax');
            // $table->decimal('taxTotal');
            // $table->decimal('total');
            // $table->decimal('paymentAmount');
            // $table->decimal('debt');

            $table->id();
            $table->string('folio')->nullable();
            $table->date('fecha_alta')->nullable();
            $table->string('cliente')->nullable();
            $table->string('forma_pago')->nullable();
            $table->string('total')->nullable();
            $table->string('estado')->nullable();

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
