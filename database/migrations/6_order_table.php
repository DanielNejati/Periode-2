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
        Schema::create('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('transaction_id')->autoIncrement()->primary();
            $table->unsignedBigInteger('user_id');
            $table->double('totalprice');
            $table->timestamps();

        });

        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaction_id')->constrained();
            $table->unsignedBigInteger('ticket_id')->constrained();
            $table->integer('quantity');
            $table->double('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
        Schema::dropIfExists('order_items');
    }
};
