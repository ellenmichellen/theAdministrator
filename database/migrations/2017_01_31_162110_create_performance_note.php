<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerformanceNote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PerformanceNotes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('noteDate');
            $table->string('note');
            $table->integer('userId');
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PerformanceNotes');
    }
}