<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_sales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_customers_id')->unsigned()->index();
            $table->integer('user_items_id')->unsigned()->index();
            $table->string('payment_status')->nullable();
            $table->string('payment_tracking_id')->nullable();
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
        Schema::dropIfExists('user_sales');
    }
}
