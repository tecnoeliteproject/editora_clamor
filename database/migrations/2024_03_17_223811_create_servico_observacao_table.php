<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Servico;
use App\Models\Observacao;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('servico_observacao', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Servico::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Observacao::class)->constrained()->onDelete('cascade');
            $table->decimal('preco', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servico_observacao');
    }
};
