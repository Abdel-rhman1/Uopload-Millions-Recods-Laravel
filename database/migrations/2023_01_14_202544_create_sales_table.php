<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string("﻿age");
            $table->string("sex");
            $table->string("cp");
            $table->string("trestbps");
            $table->string("chol");
            $table->string("fbs");
            $table->string("restecg");
            $table->string("thalach");
            $table->string("exang");
            $table->string("oldpeak");
            $table->string("slope");
            $table->string("ca");
            $table->string("thal");
            $table->string("target");
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
        Schema::dropIfExists('sales');
    }
}
