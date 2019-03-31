<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Reports.
 *
 * @author  The scaffold-interface created at 2019-03-20 07:12:06am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Reports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('reports',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->String('type');
        
        $table->String('itera');
        
        $table->String('rate_learning');

        $table->boolean('completed')->default(false);
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('net_id')->unsigned()->nullable();
        $table->foreign('net_id')->references('id')->on('nets')->onDelete('cascade');
        
        
        $table->timestamps();
        
        $table->integer('report_id')->unsigned()->nullable();
        $table->foreign('report_id')->references('id')->on('reports')->onDelete('cascade');
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
        Schema::drop('reports');
    }
}
