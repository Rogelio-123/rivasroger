<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_expenses', function (Blueprint $table) {
            $table->id();
            $table->string('provider');
            $table->string('service');
            $table->decimal('price');
            // $table->decimal('priceWithTax');
            $table->integer('quantity');
            $table->decimal('amount');
            $table->decimal('tax');
            $table->decimal('taxTotal');
            $table->decimal('total');
            $table->decimal('totalExpense');
            $table->foreignId('expense_id')->references('id')->on('expenses')->onDelete('cascade');
            $table->string('expenseCode');
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
        Schema::dropIfExists('detail_expenses');
    }
}
