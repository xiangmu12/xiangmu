<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pm extends Model
{
    use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function xxcate()
	{
		return $this->belongsTo('App\XxCate');
	}

	public function users()
	{
		return $this->belongsTo('App\User');
	}
}
