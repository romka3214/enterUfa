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
        Schema::create('establishment_statistics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('establishment_id')
                ->constrained('establishments')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->bigInteger('views');
            $table->bigInteger('new_followers');
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('establishment_statistics', function (Blueprint $table) {
            $table->dropForeign('establishment_statistics_establishment_id_foreign');
        });
        Schema::dropIfExists('establishment_statistics');
    }
};
