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
        Schema::create('busrits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('festival_id')->constrained()->onDelete('cascade');
            $table->string('duur_busrit');
            $table->string('vertrektijd');
            $table->string('aankomsttijd');
            $table->string('vertrek_locatie');
            $table->string('aankomst_locatie');
            $table->string('prijs')->default(30);
            $table->integer('beschikbare_stoelen')->default(50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('busrits');
    }
};
