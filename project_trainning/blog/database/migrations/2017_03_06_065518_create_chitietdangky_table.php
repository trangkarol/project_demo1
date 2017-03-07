<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietdangkyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdangky', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('khunggio');
            $table->integer('ma_diadiem')->unsigned();
            $table->foreign('ma_diadiem')->references('id')->on('diadiem'); 
            $table->integer('ma_user')->unsigned();
            $table->foreign('ma_user')->references('id')->on('users'); 
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
        Schema::dropIfExists('chitietdangky');
    }
}
