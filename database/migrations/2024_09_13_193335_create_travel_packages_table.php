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
        Schema::create('travel_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('destination', 50);
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->date('departure_date');
            $table->date('return_date');
            $table->integer('available_seats');
            $table->boolean('is_included_flight')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_packages');
    }
};
