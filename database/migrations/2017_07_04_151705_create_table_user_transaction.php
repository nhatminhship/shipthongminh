<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_transaction', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->comment('user cua giao dich');
            $table->string('state',200)->nullable()->comment('trang thai cua giao dich');
            $table->string('transaction_code',100)->nullable()->comment('ma cua giao dich');
            $table->string('transaction_type',100)->nullable()->comment('loai giao dich');
            $table->string('object_id',50)->nullable()->comment('id cuar doi tuong');
            $table->string('object_type')->nullable()->comment('loai cua doi tuong');
            $table->double('amount',20,2)->nullable()->comment('so tien giao dich');
            $table->double('ending_balance',20,2)->nullable()->comment('so du cuoi');
            $table->integer('created_by')->nullable()->comment('ai la nguoi tao giao dich');
            $table->timestamp('create_time')->nullable();
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
        Schema::dropIfExists('user_transaction');
    }
}
