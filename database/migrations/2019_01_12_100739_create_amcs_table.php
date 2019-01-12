<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amcs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_id');
            $table->string('purchase_ordr');
            $table->string('project_cost');
            $table->date('start_plnd_dt');
            $table->date('start_actl_dt');
            $table->string('period');
            $table->date('visit1_dt');
            $table->string('payment_1');
            $table->date('visit2_dt');
            $table->string('payment_2');
            $table->date('visit3_dt');
            $table->string('payment_3');
            $table->date('visit4_dt');
            $table->string('payment_4');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('customer_id')->references('id')->on('project_managements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amcs');
    }
}
