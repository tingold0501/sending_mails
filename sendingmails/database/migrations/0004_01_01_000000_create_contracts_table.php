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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('first_name');
            $table->string('last_name');
            $table->timestamps();
            // $table->foreignId('campaign_id')->constrained()->default(1);
            // $table->foreignId('user_id')->constrained()->default(1);
            // $table->foreignId('contact_statue_id')->constrained()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
