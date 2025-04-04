<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shoppingcart', function (Blueprint $table) {
            $table->unsignedBigInteger('shoppingcart_id')->autoIncrement()->primary();
            $table->unsignedBigInteger('user_id')->constrained();
            $table->timestamps();

        });

        Schema::create('shoppingcart_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shoppingcart_id')->constrained();
            $table->unsignedBigInteger('ticket_id')->constrained();
            $table->integer('quantity')->default(1);
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shoppingcart');
        Schema::dropIfExists('shoppingcart_items');
    }
};
