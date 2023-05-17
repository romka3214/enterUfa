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
        Schema::create('establishment_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('establishment_id')
                ->constrained('establishments')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('tag_id')
                ->constrained('tags')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('popularity_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('establishment_tags', function (Blueprint $table) {
            $table->dropForeign('establishment_tags_establishment_id_foreign');
        });
        Schema::table('establishment_tags', function (Blueprint $table) {
            $table->dropForeign('establishment_tags_tag_id_foreign');
        });
        Schema::dropIfExists('establishment_tags');
    }
};
