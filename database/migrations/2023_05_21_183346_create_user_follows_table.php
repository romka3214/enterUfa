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
        Schema::create('user_follows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('establishment_id')
                ->constrained('establishments')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('user_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_follows', function (Blueprint $table) {
            $table->dropForeign('user_follows_establishment_id_foreign');
        });
        Schema::table('user_follows', function (Blueprint $table) {
            $table->dropForeign('user_follows_user_id_foreign');
        });
        Schema::dropIfExists('user_follows');
    }
};
