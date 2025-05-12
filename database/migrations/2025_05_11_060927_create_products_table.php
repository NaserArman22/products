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
            
            $table->string('name');
            $table->text('description');
            $table->string('type');

            
            $table->string('region');
            $table->string('brand');
            $table->string('category');

            
            $table->decimal('cost_price', 10, 2);
            $table->decimal('rrp', 10, 2);

            
            $table->string('sku');
            $table->integer('stock_quantity')->default(0);
            $table->integer('alert_quantity')->default(0);


            
            $table->string('unit_quantity');
            $table->string('package_type');
            $table->string('uom'); 

            
            $table->string('image_path');

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
        Schema::dropIfExists('products');
    }
};
