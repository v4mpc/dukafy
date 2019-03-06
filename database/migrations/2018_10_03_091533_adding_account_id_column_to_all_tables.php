<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingAccountIdColumnToAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tables=['users','categories','customers','notifications','orders','products','settings'];
        foreach($tables as $table_name){

            Schema::table($table_name, function (Blueprint $table) {
                $table->integer('account_id')->unsigned()->nullable();
            });

        }
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }

    
}
