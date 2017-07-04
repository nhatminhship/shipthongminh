<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserTelephone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_telephone', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->comment('id cua khach hang');
            $table->string('mobile',20)->nullable()->comment('so dien thoai');
            $table->integer('verify')->nullable()->comment('xac nhan dang dung so nay');
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
        Schema::dropIfExists('user_telephone');
    }
}
