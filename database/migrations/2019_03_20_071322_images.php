<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Images.
 *
 * @author  The scaffold-interface created at 2019-03-20 07:13:22am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Images extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('images',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('description');
        
        $table->String('url_name');
        
        /**
         * Foreignkeys section
         */
        
        
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
        Schema::drop('images');
    }
}
