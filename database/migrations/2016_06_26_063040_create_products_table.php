<?php

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
            $table->increments('id');

            $table->string('title');          // Thi?t b? A
            $table->string('abstract')->default('');       // L� m?t s?n ph?m ...
            $table->string('body');           // xxx
            $table->string('img');            // abc.png
            $table->string('price')->default('null');          // 1tr2
            $table->string('producer')->default('');       // An Nguyen
            $table->string('features')->default('Đang cập nhật...');       // ??c tr?ng
            $table->string('specifications')->default('Đang cập nhật...'); // ti�u chu?n
            $table->string('document')->default('Đang cập nhật...');       // h??ng d?n s? d?ng

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
        Schema::drop('products');
    }
}
