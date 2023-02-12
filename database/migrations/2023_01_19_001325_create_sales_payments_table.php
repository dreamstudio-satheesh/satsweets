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
        Schema::create('sales_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('invoice_num');
            $table->foreign('invoice_num')
                ->references('invoice_number')->on('invoices')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->date('payment_date');
            $table->integer('payment_type')->nullable();
            $table->double('amount')->nullable();        
            $table->string('reference')->nullable();
            $table->text('notes')->nullable();
            $table->unsignedBigInteger('created_by'); 
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('users'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_payments');
    }
};
