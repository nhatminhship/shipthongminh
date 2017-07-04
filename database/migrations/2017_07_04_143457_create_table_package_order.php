<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePackageOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_order', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('order_id')->nullable()->comment('id cua don hang');
            $table->double('net_weight', 20, 2)->nullable()->comment('can nang tinh');
            $table->double('convert_weight',20,2)->nullable()->comment('can nang quy doi');
            $table->double('height',20,2)->nullable()->comment('chieu cao của goi hang');
            $table->double('length')->nullable()->comment('chieu dai');
            $table->double('width')->nullable()->comment('chieu rong');
            $table->text('description')->nullable()->comment('ghi chu cho hang hoa');
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
        Schema::dropIfExists('package_order');
    }
}
