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
        Schema::create('child_sub_klasifikasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('no_sub_klasifikasi')->constrained('sub_klasifikasis', 'no_sub_klasifikasi');
            $table->bigInteger('child_sub_klasifikasi');
            $table->string("deskripsi");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child_sub_klasifikasis');
    }
};
