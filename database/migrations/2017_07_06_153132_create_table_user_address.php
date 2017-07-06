<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserAddress extends Migration
{
    /**
     * Run the migrations.
     * địa chỉ dăng kí nhận hàng của khách
     * @return void
     */
    public function up()
    {
        Schema::create('user_address', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->comment('dia chi cuar khach hang nao');
            $table->string('province_id',100)->nullable()->comment('tinh');
            $table->string('mobile',50)->nullable()->comment('so dien thoai');
            $table->string('district_id',100)->nullable()->comment('quan,huyen');
            $table->text('address_detail')->nullable()->comment('dia chi');
            $table->text('description')->nullable()->comment('ghi chu');
            $table->string('type')->nullable()->comment('dia chi nhan hang lay hay nhan hang');
            $table->integer('is_default')->nullable();
            $table->integer('is_delete')->default(0)->nullable();
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
        Schema::dropIfExists('user_address');
    }
}
