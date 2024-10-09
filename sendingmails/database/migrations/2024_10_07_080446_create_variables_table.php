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
        Schema::create('variables', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('placeholder');
            $table->string('key')->unique()->nullable();
            $table->string('value')->unique()->nullable();
            // $table->foreignId('email_template_id')->constrained()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variables');
    }
};
