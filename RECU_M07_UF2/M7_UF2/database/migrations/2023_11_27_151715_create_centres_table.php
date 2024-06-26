<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrationsS
     */
    public function up(): void
    {
        Schema::create('centres', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->char('name', 100);
            $table->string('address');
            $table->string('cp');
            $table->string('city');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centres');
    }
};
