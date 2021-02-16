<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('branch');
            $table->string('manager');
            $table->string('adress');
            $table->string('phone');
            $table->string('uberUser');
            $table->string('uberPass');
            $table->string('grubUser');
            $table->string('grubPass');
            $table->string('doorUser');
            $table->string('doorPass');
            $table->string('cloverUser');
            $table->string('cloverPass');
            $table->string('postUser');
            $table->string('postPass');
            $table->string('rivasId');
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
        Schema::dropIfExists('settings');
    }
}
