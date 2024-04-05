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
        Schema::create('armario_user', function (Blueprint $table) {
            $table->bigInteger('idUser')->unasigned();
            $table->bigInteger('idArmario')->unasigned();

            // Primary Key
            $table->primary(['idUser', 'idArmario']);

            // Foreing Key
            $table->foreign('idUser')->references('id')->on('users');
            $table->foreign('idArmario')->references('id')->on('armario');
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
