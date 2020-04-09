<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('body')->nullable();
            $table->string('image')->nullable();
            $table->string('slug')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->unsignedTinyInteger('category_id')->nullable();
            $table->enum("lang", ["ru", "en"])->default('ru');
            $table->integer('count')->default(0);
            $table->string('origin_link')->nullable();
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
        Schema::dropIfExists('news');
    }
}
