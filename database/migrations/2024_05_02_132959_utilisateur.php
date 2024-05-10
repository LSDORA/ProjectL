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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id('id');
            $table->boolean('droit');
            $table->string('login');
            $table->string('password');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('age');
            $table->string('ville');
            $table->string('email')->unique();
            $table->string('photo')->nullable();
        
        });
    }
  

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
