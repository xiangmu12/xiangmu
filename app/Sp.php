<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sp extends Model
{
    use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $table = 'shangpins';

	public function users()
	{
		return $this->belongsTo('App\User');
	}

	public function xxcate()
	{
		return $this->belongsTo('App\XxCate');
	}
}
