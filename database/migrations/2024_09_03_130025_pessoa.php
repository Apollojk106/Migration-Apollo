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
        Schema::create('Human', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('name');
            $table->text('CPF')->unique();
            $table->tinyInteger('height');
            $table->date('birth');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Human');
    }
};
