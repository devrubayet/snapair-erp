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
        Schema::table('airlines', function (Blueprint $table) {
            // image কলাম থেকে unique ড্রপ করা হচ্ছে
            $table->dropUnique(['image']);
        });
    }

    public function down(): void
    {
        Schema::table('airlines', function (Blueprint $table) {
            $table->unique('image');
        });
    }
};
