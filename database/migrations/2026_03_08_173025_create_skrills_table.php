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
        Schema::create('skrills', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('skrill_name');
            $table->text('short_descrtioption')->nullable();
            $table->string('project_link')->nullable();
            $table->boolean('is_active')->default(0);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skrills');
    }
};
