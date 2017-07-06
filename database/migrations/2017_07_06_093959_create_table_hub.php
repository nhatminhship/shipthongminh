<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHub extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hub', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',50)->nullable()->comment('code cua kho');
            $table->string('name',255)->nullable()->comment('ten cu the cua kho');
            $table->string('type',255)->nullable()->comment('kieu cua kho');
            $table->text('description')->nullable()->comment('mo ta kieu kho');
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
        Schema::dropIfExists('hub');
    }
}
