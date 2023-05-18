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
        Schema::create('user_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('tag_id')
                ->constrained('tags')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('interest_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_tags', function (Blueprint $table) {
            $table->dropForeign('user_tags_user_id_foreign');
        });
        Schema::table('user_tags', function (Blueprint $table) {
            $table->dropForeign('user_tags_tag_id_foreign');
        });
        Schema::dropIfExists('user_tags');
    }
};
