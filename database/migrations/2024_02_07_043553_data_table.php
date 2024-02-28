<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> string('nama')->nullable(false);
            $table -> string('jurusan')->nullable(false);
            $table -> integer('angkatan')->nullable(false);
            $table -> integer('kelas')->nullable(false);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *p
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
