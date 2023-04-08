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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('establishment_id')
            ->constrained('establishments')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->integer('price')->default(0);
            $table->date('date_start');
            $table->date('date_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropForeign('events_establishment_id_foreign');
        });
        Schema::dropIfExists('events');
    }
};
