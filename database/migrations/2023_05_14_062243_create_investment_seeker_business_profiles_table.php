<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentSeekerBusinessProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investment_seeker_business_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('business_name')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('nature_of_business')->nullable();
            $table->string('size_of_business_in_bdt')->nullable();
            $table->string('revenue_generated_per_month_in_bdt')->nullable();
            $table->string('required_funding_amount_through_our_paltform')->nullable();
            $table->text('how_will_funding_help_business')->nullable();
            $table->string('provide_as_security')->nullable();
            $table->string('how_do_you_maintain_the_financials_of_your_business')->nullable();
            $table->text('how_did_you_know_about_us')->nullalbe();
            $table->text('add_additional_comment')->nullable();
            $table->text('admin_review')->nullable();
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
        Schema::dropIfExists('investment_seeker_business_profiles');
    }
}
