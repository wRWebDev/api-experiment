<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('developments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('postcode');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('eloquent_development_models');
    }
};
