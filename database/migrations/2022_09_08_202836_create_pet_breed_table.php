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
        Schema::create('pet_breed', function (Blueprint $table) {
            $table->id();
            $table->string('breed_id', 40);
            $table->string('breed_name', 40);
            $table->string('breed_description', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pet_breed', function (Blueprint $table) {
            //
        });
    }
};
