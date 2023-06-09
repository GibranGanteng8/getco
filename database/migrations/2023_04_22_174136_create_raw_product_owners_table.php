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
        Schema::create('raw_product_owners', function (Blueprint $table) {
            $table->id();
            $table->foreignId("raw_product_id")->constrained();
            $table->foreignId("user_id")->constrained();
            $table->integer("quantity");
            $table->enum("unit", ["Liter", "Kilogram", "Ton", "Buah", "Pack", "Piece"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('raw_product_owners');
    }
};
