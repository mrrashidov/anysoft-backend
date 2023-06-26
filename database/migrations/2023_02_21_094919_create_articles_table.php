<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('body');
            $table->string('image');
            $table->string('type');
            $table->integer('category_id');
            $table->integer('author_id')->default(1);
            $table->string('slug');
            $table->boolean('in_homepage');
            $table->boolean('in_top');
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
        Schema::dropIfExists('articles');
    }
};
