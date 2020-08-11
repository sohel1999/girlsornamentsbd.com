<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->index();
            $table->foreignId('user_id');
            $table->decimal('total');
            $table->string('cus_name');
            $table->string('cus_email');
            $table->string('cus_phone');
            $table->text('address');
            $table->dateTime('shipped_at')->nullable();
            $table->enum('status', ['pending','processing','complete','cancelled']);
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
        Schema::dropIfExists('orders');
    }
}
