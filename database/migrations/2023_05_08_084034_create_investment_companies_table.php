<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investment_companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->text('address')->nullable();
            $table->text('image')->nullable();
            $table->string('company_type')->nullable();
            $table->string('short_info')->nullable();
            $table->string('profit_per_annum')->nullable();
            $table->string('profit_period')->nullable();
            $table->string('days_left')->nullable();
            $table->string('goal')->nullable();
            $table->string('raised')->nullable();
            $table->string('being_processed')->nullable();
            $table->string('duration')->nullable();
            $table->string('min_investment')->nullable();
            $table->string('project_roi')->nullable();
            $table->string('risk_grade')->nullable();
            $table->string('repayment')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('investment_companies');
    }
}
