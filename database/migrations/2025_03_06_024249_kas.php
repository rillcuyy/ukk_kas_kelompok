<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
    $table = 'kas';
        Schema::create($table, function (Blueprint $table) {
            $table->integer('id_kas')->primary()->autoIncrement();
            $table->string('nama');
            $table->string('keterangan');
            $table->string('jenis');
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
