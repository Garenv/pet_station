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
        Schema::create('pet_detail', function (Blueprint $table) {
            $table->id();
            $table->string('breed_id', 40);
            $table->string('pet_name', 40);
            $table->string('pet_date_of_birth');
            $table->string('owner_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pet_detail', function (Blueprint $table) {
            //
        });
    }
};
