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
        Schema::create('cv_experiences', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profile_id');
            $table->string('title', 128);
            $table->string('company_name', 128);
            $table->boolean('present');
            $table->string('overview');
            $table->string('url', 128)->nullable();
            $table->string('linkedin', 128)->nullable();
            $table->date('start');
            $table->date('end')->nullable();
            $table->timestamps();

            $table->index(['profile_id','start','end']);

            $table->foreign('profile_id')->references('id')->on('cv_profiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_experiences');
    }
};
