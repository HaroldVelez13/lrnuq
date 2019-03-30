<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Report.
 *
 * @author  The scaffold-interface created at 2019-03-20 07:12:06am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Report extends Model
{
	
	
    protected $table = 'reports';

	
	public function net()
	{
		return $this->belongsTo('App\Net','net_id');
	}

	/**
     * Get the nets for the Plant.
     */
    public function images()
    {
        return $this->hasMany('App\Image');
    }

	
}
