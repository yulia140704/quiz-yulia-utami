<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('tb_pelanggan', function (Blueprint $table) {
            $table->increments('pel_id');
            $table->tinyInteger('pel_id_gol');
            $table->string('pel_no', 20);
            $table->string('pel_nama', 50);
            $table->text('pel_alamat');
            $table->string('pel_hp', 20);
            $table->string('pel_ktp', 50);
            $table->string('pel_seri', 50);
            $table->string('pel_meteran', 11);
            $table->enum('pel_aktif', ['Y', 'N']);
            $table->unsignedInteger('pel_id_user');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_pelanggan');
    }
};
