<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class XCate extends Model
{
    use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $table = 'xcates';

	public function dcate()
	{

		return $this->belongsTo('App\DCate');
	}
}
