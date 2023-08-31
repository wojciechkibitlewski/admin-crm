<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 
            $table->longText('note');          
            $table->longText('noteForClient');          
            $table->float('leadValue'); 
            $table->float('advanceValue'); 

            $table->unsignedBigInteger('source_id');
            $table->foreign('source_id')->references('id')->on('salessources');     
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('salestypes');     
            $table->date('executionDate'); 
            $table->time('executionTime'); 
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
