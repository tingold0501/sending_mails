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
            $table->string('name')->default(Campaign::get_latest_campaign()->name);
            $table->text('content')->default(Campaign::get_latest_campaign()->subject);
            $table->boolean('active')->default(true);
            $table->string('body');
            $table->string('css_text');
            $table->foreignId('campaign_id')->constrained()->default(Campaign::get_latest_campaign()->id);
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
