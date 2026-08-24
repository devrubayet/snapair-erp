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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('booking_reference')->unique();
            $table->foreignId('client_id')->constrained()->cascadeOnDelete();
            $table->foreignId('vendor_id')->nullable()->nullOnDelete();
            $table->enum('service_type', ['visa', 'ticket', 'hotel', 'document']);
            $table->decimal('cost_price', 12, 2)->default(0.00);   // কেনার দাম / ভেন্ডর রেট
            $table->decimal('selling_price', 12, 2)->default(0.00); // বিক্রির দাম / ক্লায়েন্ট চার্জ
            $table->enum('status', ['pending', 'processing', 'completed', 'cancelled'])->default('pending');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
