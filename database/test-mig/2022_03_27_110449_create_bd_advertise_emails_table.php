<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBdAdvertiseEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bd_advertise_emails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('advertise_id');
            $table->string('name');
            $table->string('email');
            $table->string('subject');
            $table->text('details_message');
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
        Schema::dropIfExists('bd_advertise_emails');
    }
}
