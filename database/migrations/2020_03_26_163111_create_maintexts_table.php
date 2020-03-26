<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintexts',function(Blueprint $table){
            $table->increments("id");
            $table->string("name")->nullable();
            $table->text("body")->nullable();
            $table->string("url");
            $table->string("type")->nullable();
            $table->enum("lang", ["ru", "en"])->default('ru');
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
        Schema::dropIfExists('maintexts');
    }
}
