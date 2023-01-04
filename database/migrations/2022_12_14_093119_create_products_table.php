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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128)->unique();
            $table->string('code', 50)->unique();    
            $table->smallInteger('stocks')->default(1);
            $table->float('price', 8, 2);
            $table->char('gst', 4)->default(0);
            $table->string('hsncode', 12)->default(0000);
            $table->timestamps();


            $table->foreignId('category_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
