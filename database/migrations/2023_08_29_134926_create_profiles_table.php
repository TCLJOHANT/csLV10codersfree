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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('title',45);
            $table->text('biografia');
            $table->string('website',45);
            //id de ussuario debe ser unico
            $table->unsignedBigInteger('user_id')->unique();
             //restriccion de llave foranea al campo user_id referenciando id de tabal users
             //ademas de eliminacion y actualizacion en cascada
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
