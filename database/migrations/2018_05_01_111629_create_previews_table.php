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
            $table->string('template');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('colour');
            $table->string('logo')->nullable();
            $table->string('address');
            $table->string('phone');
            $table->string('mobile');
            $table->string('email');
            $table->string('working_hours');

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
