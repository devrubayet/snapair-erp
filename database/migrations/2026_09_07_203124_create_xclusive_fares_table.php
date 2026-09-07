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
        Schema::create('xclusive_fares', function (Blueprint $table) {
            $table->id();
            // Foreign Key Connection
            $table->foreignId('airline_id')->constrained('airlines')->cascadeOnDelete();

            // Flight Details
            $table->integer('available_seats')->default(0);
            $table->string('origin_code', 10);
            $table->time('departure_time');
            $table->date('departure_date');

            $table->string('destination_code', 10);
            $table->time('arrival_time');
            $table->date('arrival_date');

            $table->string('duration')->nullable();
            $table->integer('stops')->default(0);

            $table->decimal('price', 10, 2);
            $table->string('currency', 10)->default('BDT');
            $table->string('booking_url')->nullable();
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('xclusive_fares');
    }
};
