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
        Schema::create('cobas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_pro');
            $table->string('nilai_pro');
            $table->string('name_am');
            $table->string('name_pm');
            $table->string('name_tec');
            $table->string('status');
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
        Schema::dropIfExists('cobas');
    }
};
