<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilProjekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_projek', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("users_id");
            $table->string('judul');
            $table->text('desc');
            $table->string('file_name');
            $table->string('file_type');
            $table->string('file_size');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_projek');
    }
}
