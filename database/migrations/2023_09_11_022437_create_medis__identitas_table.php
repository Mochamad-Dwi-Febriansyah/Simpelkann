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
        Schema::create('medis_identitas', function (Blueprint $table) {
            $table->id(); 
            $table->bigInteger('klinik_id')->unsigned()->index()->nullable();
            $table->foreign('klinik_id')->references('id')->on('kliniks')->onDelete('cascade');
            $table->bigInteger('medis_id')->unsigned()->index()->nullable();
            $table->foreign('medis_id')->references('id')->on('medis')->onDelete('cascade');
            $table->string('nama_klinik'); 
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medis__identitas');
    }
};
