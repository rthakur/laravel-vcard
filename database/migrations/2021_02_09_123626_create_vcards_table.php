<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vcards', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('about_compnay_name');
            $table->string('about_email')->nullable();
            $table->string('about_address')->nullable();
            $table->string('about_city')->nullable();
            $table->string('about_state')->nullable();
            $table->string('about_zip')->nullable();
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
        Schema::dropIfExists('vcards');
    }
}
