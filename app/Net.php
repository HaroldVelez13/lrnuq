<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Net.
 *
 * @author  The scaffold-interface created at 2019-03-20 07:08:32am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Net extends Model
{
	
	
    protected $table = 'nets';

	
	public function plant()
	{
		return $this->belongsTo('App\Plant','plant_id');
	}

	/**
     * Get the reports for the Net.
     */
    public function reports()
    {
        return $this->hasMany('App\Report');
    }

    public function user()
	{
		return $this->belongsTo('App\User','user_id');
	}

	
}
