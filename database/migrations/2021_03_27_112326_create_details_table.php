<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $tablbe->string('detail_nama');
            $tablbe->string('detail_telepon');
            $tablbe->string('detail_alamat');
            $tablbe->string('detail_jeniskelamin');
            $tablbe->string('detail_foto')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('details');
    }
}
