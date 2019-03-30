<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Plant.
 *
 * @author  The scaffold-interface created at 2019-03-20 07:01:49am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Plant extends Model
{
	
	
    protected $table = 'plants';

	
	public function user()
	{
		return $this->belongsTo('App\User','user_id');
	}

	/**
     * Get the nets for the Plant.
     */
    public function nets()
    {
        return $this->hasMany('App\Net');
    }

	
}
