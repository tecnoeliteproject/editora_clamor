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
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('service_id')->constrained()->cascadeOnDelete()->on('servicos');
            $table->foreignId('price_id')->constrained()->onDelete('no action');
            $table->enum('status', ['pendente', 'em andamento', 'finalizada', 'cancelada'])->default('pendente');
            $table->string('comprovativo_pagamento_url')->nullable();
            $table->integer('quantidade_paginas')->nullable();
            $table->text('observacoes')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_requests');
    }
};
