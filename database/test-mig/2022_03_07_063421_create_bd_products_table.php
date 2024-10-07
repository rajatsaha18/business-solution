<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBdProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bd_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('added_by')->nullable();
            $table->integer('bd_user_id');
            $table->integer('product_cat_id');
            $table->integer('product_sub_cat_id');
            $table->integer('bd_brand_id')->nullable();
            $table->integer('bd_origin_id')->nullable();
            $table->integer('product_type_id');
            $table->string('title');
            $table->string('slug');
            $table->string('price_type');
            $table->text('image')->nullable();
            $table->integer('click_count')->default(0);
            $table->decimal('price',10,2)->default(0);
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->boolean('status')->default(0);
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keyword')->nullable();
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
        Schema::dropIfExists('bd_products');
    }
}
