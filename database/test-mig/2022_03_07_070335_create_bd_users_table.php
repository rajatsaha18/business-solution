<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBdUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bd_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('business_name');
            $table->string('phone')->comment('add multiple phone divided by comma');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('password');
            $table->softDeletes();
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
        Schema::dropIfExists('bd_users');
    }
}
