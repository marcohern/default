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
        Schema::create('cv_articles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profile_id');
            $table->string('category',32);
            $table->string('slug', 128);
            $table->string('locale',32);
            $table->integer('ord');
            $table->mediumText('text');
            $table->timestamps();

            $table->index(['profile_id','category','lang','ord']);

            $table->foreign('profile_id')->references('id')->on('cv_profiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_articles');
    }
};
