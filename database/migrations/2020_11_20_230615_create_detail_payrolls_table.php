<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPayrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_payrolls', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('job');
            $table->date('from');
            $table->date('to');
            $table->decimal('salary');
            $table->integer('hours');
            $table->decimal('payment');
            $table->integer('extraH');
            $table->decimal('extraT');
            $table->decimal('totalP');
            $table->foreignId('payroll_id')->references('id')->on('payrolls')->onDelete('cascade');
            $table->string('payrollCode');
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
        Schema::dropIfExists('detail_payrolls');
    }
}
