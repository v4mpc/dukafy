<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('layout');
            $table->string('colour');
            $table->string('store_name');
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('logo')->nullable();
            $table->string('working_hours')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email');
            $table->string('about')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
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
        Schema::dropIfExists('previews');
    }
}
