<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('invoice_number')->unique();
            $table->dateTime('date');
            $table->dateTime('duedate')->nullable();
            $table->double('sub_total')->nullable();
            $table->double('total')->nullable();
            $table->double('taxamount')->nullable();
            $table->double('discount')->nullable();
            $table->double('paid_amount')->nullable();
            $table->integer('payment_type')->nullable();
            $table->text('note')->nullable();
            $table->foreignId('customer_id')->unsigned();
            $table
            ->foreign('customer_id')
            ->references('id')
            ->on('customers');            
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
        Schema::dropIfExists('invoices');
    }
};
