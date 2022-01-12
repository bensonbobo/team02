<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drinks', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->comment('飲料');
            $table->foreignId('bid')->comment('品牌編號');
            $table->integer('milliliters')->unsigned()->comment('毫升')->nullable();
            $table->integer('price')->unsigned()->comment('價錢')->nullable();
            $table->double('calories')->unsigned()->comment('熱量')->nullable();
            $table->timestamps();
            $table->foreign('bid')->references('id')->on('brands')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drinks');
    }
}
