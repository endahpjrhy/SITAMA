<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 250)->nullable();
            $table->text('alamat')->nullable();
            $table->string('nim', 100)->nullable();
            $table->string('jurusan', 250)->nullable();
            $table->string('universitas', 250)->nullable();
            $table->string('jenis_kelamin', 10)->nullable();
            $table->date('periode_masuk')->nullable();
            $table->date('periode_keluar')->nullable();
            $table->string('telp', 50)->nullable();
            $table->string('status', 10)->nullable();
            $table->string('file_pengantar', 250)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigInteger("role")->nullable();
            $table->text('desc')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
