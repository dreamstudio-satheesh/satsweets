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
            $table->double('total', 8, 2);            
            $table->smallInteger('gst')->unsigned();          
            $table->smallInteger('quantity')->unsigned();
            $table->double('gstamount', 8, 2);            
            $table->text('description')->nullable();      
            $table->string('product_code');
            $table->string('hsncode', 12)->default(0000);
            $table->foreignId('invoice_id')->unsigned();
            $table->foreign('product_code')->references('code')->on('products');            
            $table
                ->foreign('invoice_id')
                ->references('id')
                ->on('invoices')
                ->onDelete('cascade');
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
        Schema::dropIfExists('invoice_items');
    }
};
