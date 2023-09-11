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
        Schema::create('riwayat_imunisasies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('child_users_id')->unsigned()->index()->nullable();
            $table->foreign('child_users_id')->references('id')->on('child_users')->onDelete('cascade');
            $table->date('tanggal_kedatangan');
            $table->bigInteger('imunisasi_ke');
            $table->string('keterangan_imunisasi');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_imunisasies');
    }
};
