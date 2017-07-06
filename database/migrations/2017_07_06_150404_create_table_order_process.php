<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrderProcess extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_process', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->nullable()->comment('id cua don hang');
            $table->integer('share_order_id')->nullable()->comment('nguoi phan don luc di giao hoac di lay');
            $table->integer('receive_order_id')->nullable()->comment('nguoi duoc phan don luc di giao hoac di lay ');
            $table->string('order_status')->nullable()->comment('trang thai cua don hang');
            $table->text('description')->nullable()->comment('mo ta cho tung trang thai');
            $table->timestamp('status_time')->nullable()->comment('thoi gian tung trang thai');
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
        Schema::dropIfExists('order_process');
    }
}
