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
        Schema::create('cv_clients', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profile_id');
            $table->string('logo_uri',128);
            $table->string('web_uri',128);
            $table->string('title',128);
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
        Schema::dropIfExists('cv_clients');
    }
};
