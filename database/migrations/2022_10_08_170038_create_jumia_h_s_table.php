<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJumiaHSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jumia_h_s', function (Blueprint $table) {
            $table->id();
            $table->string("item")->nullable();
            $table->string("price")->nullable();
            $table->string("qty")->nullable();
            $table->string("desc")->nullable();
            $table->string("cat")->nullable();
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
        Schema::dropIfExists('jumia_h_s');
    }
}
