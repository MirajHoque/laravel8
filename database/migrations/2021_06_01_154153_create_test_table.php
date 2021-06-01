<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    //up(): used for create and define structure of database
    {
        Schema::create('test', function (Blueprint $table) {
            $table->id(); //column in tabble
            $table->string('name');
            $table->string('address');
            $table->timestamps();
            //timestamps(): automatically cretae two columns created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test');
    }
}
