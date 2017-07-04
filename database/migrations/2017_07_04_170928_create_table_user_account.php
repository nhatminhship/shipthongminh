<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_account', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->comment('chu so huu tai khoan');
            $table->string('account_name',200)->nullable()->comment('têm chủ sỡ hữu tài khoản');
            $table->string('account_number',100)->nullable()->comment('số tài khoản ngân hàng');
            $table->string('banking_name',200)->nullable()->comment('tên ngân hàng');
            $table->string('banking_branch',300)->nullable()->comment('tên chi nhanh , hôi so');
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
        Schema::dropIfExists('user_account');
    }
}
