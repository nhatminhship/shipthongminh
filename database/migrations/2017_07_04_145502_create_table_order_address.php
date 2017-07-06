<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrderAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_address', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->nullable()->comment('dia chi don hang');
            $table->integer('user_id')->nullable()->comment('dia chi nhan hang cua khach nao');
            $table->string('customer_name',255)->nullable()->comment('ten nguoi nhan hang hoac gui hang');
            $table->string('mobile',50)->nullable()->comment('so dien thoai');
            $table->string('province',100)->nullable()->comment('tinh');
            $table->string('district',100)->nullable()->comment('quan,huyen');
            $table->text('address_detail')->nullable()->comment('dia chi');
            $table->string('address_type')->nullable()->comment('dia chi nhan hang lay hay nhan hang');
            $table->text('note')->nullable()->comment('lưu ý địa chỉ nhận');
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
        Schema::dropIfExists('order_address');
    }
}
