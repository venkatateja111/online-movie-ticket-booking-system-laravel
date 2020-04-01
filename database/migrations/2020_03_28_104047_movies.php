<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Movies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musers',function(
         Blueprint $table){
            $table->bigIncrements('id');
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->string('email_id',100);
            $table->string('password',100);
            $table->bigInteger('phone');
        });
         
         Schema::create('mproducts',function(
         Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name',100)->unique();
        });

         Schema::create('muser_products',function(
         Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('uid');
            $table->bigInteger('pid');
            $table->bigInteger('no of tickets');
            $table->bigInteger('total');
            $table->date('date');
            $table->enum('status', array('pending', 'confirmed'));
        });
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
