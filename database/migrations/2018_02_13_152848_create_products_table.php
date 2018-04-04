<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('ProductID');
            $table->char('ProductName',100);
            $table->float('ProductPrice',8,2);
            $table->text('ProductWeight',250);
            $table->text('ProductCartDesc',250);
            $table->text('ProductShortDesc',1000);
            $table->text('ProductLongDesc',2500);
            $table->text('ProductThumb',2500);
            $table->text('ProductImage',2500);
            $table->integer('ProductCategoryID',false, true)->length(11);
            $table->float('ProductStock',8,2);
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
}
