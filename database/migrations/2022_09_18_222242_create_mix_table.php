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
        Schema::create('mix', function (Blueprint $table) {
            $table->id();
            $table->string("name", 255);
            $table->string("cost", 255);
            $table->string("existence", 255);
            $table->string("type", 255);
            $table->string("description", 255);
            $table->string("brand", 255);
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
        Schema::dropIfExists('mix');
    }
};
