<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertise_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('company_id');
            $table->string('business_name');
            $table->string('slug');
            $table->string('owner_name');
            $table->text('address');
            $table->string('phone')->comment('insert multiple number with comma separator');
            $table->string('email');
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('google_location')->nullable();
            $table->integer('district_id');
            $table->integer('division_id')->nullable();
            $table->integer('area_id')->nullable();
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
        Schema::dropIfExists('advertise_posts');
    }
}
