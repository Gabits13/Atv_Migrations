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
     Schema::create('alunos', function (Blueprint $table) {
        $table->id();
        $table->string('nome', 100);
        $table->string('email', 150)->unique();
        $table->string('telefone', 15)->nullable();
        $table->date('data_nascimento');
        $table->string('curso', 100);
        $table->string('Motivo_contato', 100);
        $table->string('Mensagem', 150);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
