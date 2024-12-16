<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('tb_golongan', function (Blueprint $table) {
            $table->tinyIncrements('gol_id');
            $table->string('gol_kode', 10);
            $table->string('gol_nama', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_golongan');
    }
};
