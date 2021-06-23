<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormationsLanguages extends Migration
{
    
    public function up()
    {
        Schema::create('formation_language', function (Blueprint $table) {
            
            $table->unsignedBigInteger('formation_id');
            $table->foreign('formation_id')->references('id')->on('formations');

            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('id')->on('languages');
            
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('formation_language');
    }
}
