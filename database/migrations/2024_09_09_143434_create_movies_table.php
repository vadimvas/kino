<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categories_id')->nullable();
            // $table->foreign('categories_id')->references('id')->on('categories');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('preview')->nullable();
            $table->float('rating')->nullable();
            $table->string('srcvideo')->nullable();
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
        Schema::dropIfExists('movies');
    }
};
