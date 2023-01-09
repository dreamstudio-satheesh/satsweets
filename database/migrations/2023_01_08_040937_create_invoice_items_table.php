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
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');            
            $table->double('price', 8, 2);      
            $table->mediumInteger('total')->unsigned();            
            $table->smallInteger('gst')->unsigned();          
            $table->smallInteger('quantity')->unsigned();
            $table->smallInteger('gstamount')->unsigned();            
            $table->text('description')->nullable();      
            $table->foreignId('product_id')->unsigned();
            $table->foreignId('invoice_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');            
            $table
                ->foreign('invoice_id')
                ->references('id')
                ->on('invoices')
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_items');
    }
};
