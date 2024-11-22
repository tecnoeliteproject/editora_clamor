<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('perfil_clientes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->onDelete('cascade');
            $table->enum('nivel_academico', ['Básico', 'Médio', 'Licenciado', 'Mestre', 'PhD'])->default('Médio');
            $table->string('bi', 14);
            $table->string('telefone');
            $table->date('data_nascimento');
            $table->string('nacionalidade');
            $table->string('provincia');
            $table->string('municipio');
            $table->string('morada');
            $table->string('copia_bilhete')->nullable();
            $table->enum('genero', ['masculino', 'feminino', 'outro']);
            $table->enum('estado_civil', ['solteiro', 'casado', 'divorciado', 'viuvo']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfil_clientes');
    }
};
