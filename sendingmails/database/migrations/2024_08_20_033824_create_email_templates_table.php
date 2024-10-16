<?php

use App\Models\Campaign;
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
        Schema::create('email_templates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('content');
            $table->boolean('active')->default(true);
            $table->longText('body');
            $table->longText('css_text');
            $table->string('variable_keys')->nullable();
            $table->foreignId('campaign_id')->constrained();
            $table->foreign('variable_keys')->references('key')->on('variables');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_templates');
    }
};
