<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WoMen extends Model
{
    use SoftDeletes;
    protected $table = 'womens';
	protected $dates = ['deleted_at'];
}
