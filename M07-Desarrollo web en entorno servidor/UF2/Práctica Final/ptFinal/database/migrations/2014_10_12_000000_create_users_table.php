<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nick', 20)->unique();
            $table->string('email', 30)->unique();
            $table->string('email_verifield_at')->nullable();
            $table->string('nombre', 20)->nullable();
            $table->string('apellido', 25)->nullable();
            $table->string('dni', 9);
            $table->date('fecha');
            $table->string('password');
            $table->boolean('rol')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
