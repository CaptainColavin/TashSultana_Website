<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class goldenbook extends Model
{
	protected $table = "goldenbook";

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
