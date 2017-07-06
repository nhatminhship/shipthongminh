<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLocation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label',255)->nullable()->comment('ten cua dia danh');
            $table->string('key_code',255)->nullable()->comment('code');
            $table->string('type',255)->nullable()->comment('quan huyen hay tinh');
            $table->string('parent_id',50)->nullable()->comment('dia chi thuoc lop nao');
            $table->string('status',10)->nullable()->comment('trang thai cua ban ghi');
            $table->string('code',50)->nullable()->comment('ma code');
            $table->integer('can_delete')->nullable()->comment('co the xoa');
            $table->integer('ordering')->nullable()->comment('thu tu săp xep');
            $table->string('logistic_code',10)->nullable();
            $table->string('warehouse',10)->nullable()->comment('chinh la hub');
            
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
        Schema::dropIfExists('location');
    }
}
