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
        Schema::create('cv_languages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profile_id');
            $table->string('name',32);
            $table->string('locale',6);
            $table->string('description');
            $table->integer('score');
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
        Schema::dropIfExists('cv_languages');
    }
};
