<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id'); // id cua bảng
            $table->string('code',50)->nullable()->comment('ma don hang');
            $table->integer('created_by')->nullable()->comment('nguoi tao don');
            $table->integer('owner_id')->nullable()->comment('don cua khach hang nao');
            $table->integer('share_user_id')->nullable()->comment('nguoi phan don');
            $table->integer('receive_user_id')->nullable()->comment('nguoi nhan don');
            #$table->integer('address_receive_id')->nullable()->comment('dia chỉ nhận đơn (đến lấy đơn)');
            #$table->integer('address_destination_id')->nullable()->comment('đích đến của đơn');
            $table->double('cod_money', 20, 2)->nullable()->default(0)->comment('tiền code COD');//tong gia tri don hang - NDT
            $table->integer('package_order_id')->nullable()->comment('can nang , khoi luong cua don hang');
            $table->string('payment_user')->nullable()->comment('nguoi gui hay nguoi nhan thanh toan');
            $table->double('order_fee_temporary', 20, 2)->nullable()->comment('phi don hang tạm tính');
            $table->double('order_fee', 20, 2)->nullable()->comment('tien phi ship don hang');
            $table->integer('send_time')->nullable()->comment('so lan duoc gui di , gui lai');
            $table->text('description')->nullable()->comment('ghi chu cho don');

            
            $table->timestamp('receive_at')->nullable()->comment('thoi gian nhan don');
            $table->timestamp('company_receive_at')->nullable()->comment('thoi gian cty ship nhan hang');
            $table->timestamp('share_at')->nullable()->comment('thoi gian phan don cho ship');
            $table->timestamp('delivery_at')->nullable()->comment('thoi gian bat dau giao');
            $table->timestamp('customer_receive_at')->nullable()->comment('khach nhan hang(thanh cong) , duocj hieu la ship mang giao vee');
            $table->timestamp('waiting_delivery_repeat_at')->nullable()->comment('cho giao lai');
            $table->timestamp('delivery_repeat_at')->nullable()->comment('giao lai');
            $table->timestamp('waiting_return_at')->nullable()->comment('cho tra hang');
            $table->timestamp('return_at')->nullable()->comment('tra hang vao luc');
            $table->timestamp('cancel_at')->nullable()->comment('thoi gian huy');
            $table->timestamp('refuse_at')->nullable()->comment('thoi gian tu choi');

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
        Schema::dropIfExists('order');
    }
}
