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
        Schema::create('piencings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profissional_id')->nullable()->constrained('profissionais')->after('id');
            $table->string('local');
            $table->string('modelo');
            $table->date('data');

            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('piercings');
    }
};
