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
        Schema::create('briefs', function (Blueprint $table) {
            $table->id();
            $table->json('service_ids');
            $table->text('task_text');
            $table->integer('budget_id');
            $table->json('how_know_us')->nullable();
            $table->string('email')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('company_name')->nullable();
            $table->json('images')->nullable();
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
        Schema::dropIfExists('briefs');
    }
};
