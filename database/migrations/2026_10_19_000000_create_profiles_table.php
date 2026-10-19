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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->string('hero_label')->nullable();
            $table->string('hero_title')->nullable();
            $table->string('hero_subtitle')->nullable();

            $table->string('intro_eyebrow')->nullable();
            $table->string('intro_title')->nullable();
            $table->text('intro_text_1')->nullable();
            $table->text('intro_text_2')->nullable();

            $table->string('fact_1_value')->nullable();
            $table->string('fact_1_label')->nullable();
            $table->string('fact_2_value')->nullable();
            $table->string('fact_2_label')->nullable();
            $table->string('fact_3_value')->nullable();
            $table->string('fact_3_label')->nullable();
            $table->string('fact_4_value')->nullable();
            $table->string('fact_4_label')->nullable();

            $table->text('vision_text')->nullable();
            $table->text('mission_text')->nullable();

            $table->string('values_eyebrow')->nullable();
            $table->string('values_title')->nullable();
            $table->string('values_subtitle')->nullable();

            $table->string('value_1_title')->nullable();
            $table->text('value_1_desc')->nullable();
            $table->string('value_2_title')->nullable();
            $table->text('value_2_desc')->nullable();
            $table->string('value_3_title')->nullable();
            $table->text('value_3_desc')->nullable();
            $table->string('value_4_title')->nullable();
            $table->text('value_4_desc')->nullable();

            $table->string('cta_title')->nullable();
            $table->string('cta_subtitle')->nullable();
            $table->string('cta_button_label')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
