<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCredentialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credentials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('uber_user')->nullable();
            $table->string('uber_pass')->nullable();
            $table->string('grub_user')->nullable();
            $table->string('grub_pass')->nullable();
            $table->string('door_user')->nullable();
            $table->string('door_pass')->nullable();
            $table->string('clover_user')->nullable();
            $table->string('clover_pass')->nullable();
            $table->string('post_user')->nullable();
            $table->string('post_pass')->nullable();
            $table->string('rivas_id')->nullable();
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
        Schema::dropIfExists('credentials');
    }
}
