<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()        
    {
    Schema::create('kehadirans', function (Blueprint $table) {
        $table->id();
        $table->string('nama_santri');
        $table->date('tanggal');
        $table->string('status'); // 'hadir', 'izin', 'sakit', 'alpa'
        $table->timestamps();
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kehadirans');
    }
};
