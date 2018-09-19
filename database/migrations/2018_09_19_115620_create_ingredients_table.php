<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->increments('id');
            $table->string("ingredient", 100);
            $table->string("description", 100);
            $table->boolean("isBase")->default(false);
            $table->boolean("isSauce")->default(false);
            $table->boolean("isTopping")->default(false);
            $table->boolean("isMeat")->default(false);
            $table->boolean("isFish")->default(false);
            $table->boolean("isCheese")->default(false);
            $table->boolean("isVegetable")->default(false);
            $table->boolean("isSalad")->default(false);
            $table->boolean("isFungi")->default(false);
            $table->boolean("isExtra")->default(false);
            $table->boolean("isVegan")->default(false);
            $table->boolean("isVegetarian")->default(false);
            $table->boolean("isGlutenFree")->default(false);
            $table->boolean("isKosher")->default(false);
            $table->boolean("isHalal")->default(false);
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
        Schema::dropIfExists('ingredients');
    }
}
