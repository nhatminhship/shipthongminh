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
            $table->integer('')->nullable()->comment('nguoi phan don');
            
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
