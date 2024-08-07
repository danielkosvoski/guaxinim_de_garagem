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
        Schema::disableForeignKeyConstraints();
        Schema::create('profissionais', function (Blueprint $table) {
            $table->id();

            $table->string('nome',100);
            $table->foreignId('especialidade_id')->nullable()->constrained('especialidades')->after('id');
            $table->string("contato");
            $table->string("descricao");
            //$table->foreignId('tatuagem_id')->nullable()->constrained('tatuagens')->after('id');
          //  $table->foreignId('piercing_id')->nullable()->constrained('piercings')->after('id');
          //  $table->foreignId('galeria_id')->nullable()->constrained('galerias')->after('id');



            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profissionais');
    }
};
