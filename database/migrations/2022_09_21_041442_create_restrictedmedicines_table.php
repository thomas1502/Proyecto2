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
        Schema::create('restrictedmedicines', function (Blueprint $table) {
            $table->id();
            $table->string("name",255);
            $table->string("cost",255);
            $table->string("existence",255);
            $table->string("laboratory",255);
            $table->string("active_principle",255);
            $table->string("prescription_code",255);
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
        Schema::dropIfExists('restrictedmedicines');
    }
};
