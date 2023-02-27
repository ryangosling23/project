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
        Schema::create('ones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('img');
            $table->string('kategory');
            $table->string('name');
            $table->string('price');
            $table->string('col-vo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ones');
    }
};
