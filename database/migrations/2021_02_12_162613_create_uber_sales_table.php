<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUberSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uber_sales', function (Blueprint $table) {
            $table->id();
            $table->string('folio')->nullable();
            $table->date('fecha_alta')->nullable();
            $table->string('sucursal')->nullable();
            $table->string('cliente')->nullable();
            $table->string('forma_pago')->nullable();
            $table->string('total')->nullable();
            $table->string('estado')->nullable();
            $table->string('source')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uber_sales');
    }
}
