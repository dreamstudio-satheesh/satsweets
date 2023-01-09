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
            $table->smallInteger('taxamount')->unsigned();
            $table->mediumInteger('sub_total')->unsigned();
            $table->mediumInteger('total')->unsigned();
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
