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
        Schema::create('cv_job_titles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profile_id');
            $table->string('slug',128)->unique();
            $table->string('title',128);
            $table->integer('ord');
            $table->timestamps();

            $table->foreign('profile_id')->references('id')->on('cv_profiles');
            $table->index(['profile_id','ord']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_job_titles');
    }
};
