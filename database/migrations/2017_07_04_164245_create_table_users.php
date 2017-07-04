<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',255)->nullable()->comment('ten dang ki');
            $table->string('password',255)->nullable();
            $table->string('email',255)->nullable()->comment('email ca nhan');
            $table->string('code',255)->nullable()->comment('ma code cua khach hang');
            $table->string('section',255)->nullable()->comment('khach la quan tri hay khach hang');
            $table->string('status',255)->nullable()->comment('hoat dong hoac ko hoat dong');
            $table->double('account_balance',20,2)->nullable()->comment('tien phi ship');
            $table->double('account_cod',20,2)->nullable()->comment('tien cod');
            $table->string('avatar',255)->nullable()->comment('duong dan anh');
            $table->timestamp('join_time')->nullable()->comment('thoi gian tham gia');

            $table->timestamps();
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
