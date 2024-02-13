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
        Schema::create('staff_gudang', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id')->constrained('users', 'id')->onDelete('cascade')->nullable();
            $table->integer('jabatan_id')->constrained('jabatan', 'id')->onDelete('cascade');
            $table->string('nama');
            $table->string('kode');
            $table->integer('umur');
            $table->string('jenis_kelamin');
            $table->string('no_ktp');
            $table->string('no_kk')->nullable();
            $table->text('alamat');
            $table->text('domisili');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_gudang');
    }
};
