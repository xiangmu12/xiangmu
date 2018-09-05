<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sp extends Model
{
    use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $table = 'shangpins';
<<<<<<< HEAD
	public function users()
=======

	public function user()
>>>>>>> 2a2e1c01d0db7c18f99a87fd9e46f3226c8104b0
	{
		return $this->belongsTo('App\User');
	}

	public function xxcate()
	{
		return $this->belongsTo('App\XxCate');
	}
}
