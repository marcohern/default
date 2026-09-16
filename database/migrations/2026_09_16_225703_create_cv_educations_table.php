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
        Schema::create('cv_educations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profile_id');
            $table->string('degree', 128);
            $table->string('school_name', 128);
            $table->boolean('present');
            $table->string('overview');
            $table->string('url', 128)->nullable();
            $table->string('linkedin', 128)->nullable();
            $table->date('start');
            $table->date('end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_educations');
    }
};
