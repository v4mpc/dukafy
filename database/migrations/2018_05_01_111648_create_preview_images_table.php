<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreviewImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preview_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('preview_id')->unsigned()->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::table('preview_images', function(Blueprint $table) {
            $table->foreign('preview_id')->references('id')->on('previews')->onUpdate('cascade')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preview_images');
    }
}
