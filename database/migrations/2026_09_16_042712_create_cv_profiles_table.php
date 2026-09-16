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
        Schema::create('cv_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('slug',64)->unique();
            $table->string('first_name',64);
            $table->string('last_name',64);
            $table->string('job_title',128);
            $table->date('birth');
            $table->string('intro');
            $table->boolean('sluggable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_profiles');
    }
};
