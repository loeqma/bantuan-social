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
    Schema::create('beneficiaries', function (Blueprint $table) {
        $table->id();
        $table->string('nama_lengkap');
        $table->string('nik', 20)->unique();
        $table->text('alamat');
        $table->string('jenis_bantuan');
        $table->date('tanggal_lahir');
        $table->enum('status_penerima', ['Layak', 'Tidak Layak']);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiaries');
    }
};
