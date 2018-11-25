<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_users', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('jadwal_id');
            $table->foreign('jadwal_id')
                ->references('id_jadwal')->on('jadwals')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id_user')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_users');
    }
}
