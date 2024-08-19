<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('productid'); #foreighn key
            $table->float('price');    
            $table->integer('qty');
            $table->float('tax');    
            $table->float('total');    
            $table->float('discount');    
            $table->float('net');
            $table->integer('userid');    
    







 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
