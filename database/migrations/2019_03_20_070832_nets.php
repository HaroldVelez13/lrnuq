<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Nets.
 *
 * @author  The scaffold-interface created at 2019-03-20 07:08:32am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Nets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('nets',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->String('type');
        
        $table->String('rate_learning');
        
        $table->String('itera');
        
        $table->String('number_layers');
        
        $table->String('establishment_time');
        
        $table->String('sampling_time');
        
        $table->String('reference');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('plant_id')->unsigned()->nullable();
        $table->foreign('plant_id')->references('id')->on('plants')->onDelete('cascade');

        $table->integer('user_id')->unsigned()->nullable();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        
        
        $table->timestamps();
        
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('nets');
    }
}
