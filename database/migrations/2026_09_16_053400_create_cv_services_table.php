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
        Schema::create('cv_services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profile_id');
            $table->string('title', 64);
            $table->string('icon_css', 64);
            $table->string('text');
            $table->integer('ord');
            $table->timestamps();
            $table->index(['profile_id','ord']);

            $table->foreign('profile_id')->references('id')->on('cv_profiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_services');
    }
};
