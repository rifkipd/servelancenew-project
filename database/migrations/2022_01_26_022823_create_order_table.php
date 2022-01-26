<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buyer_id')->nullable();
            $table->unsignedBigInteger('freelancer_id')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->unsignedBigInteger('order_status_id')->nullable();
            $table->longText('file')->nullable();
            $table->longText('note')->nullable();
            $table->date('expired')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('buyer_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('freelancer_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('service')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
