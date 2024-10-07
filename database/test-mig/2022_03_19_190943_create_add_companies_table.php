<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('business_category');
            $table->string('business_name');
            $table->string('slug');
            $table->string('owner_name');
            $table->text('address');
            $table->string('phone')->comment('insert multiple number with comma separator');
            $table->string('email');
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('google_location')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->longText('keywords');
            $table->boolean('status')->default(1);
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
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
        Schema::dropIfExists('add_companies');
    }
}
