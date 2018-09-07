<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sp_tag extends Model
{
   use SoftDeletes;
    protected $table = 'shangpin_tag';
	protected $dates = ['deleted_at'];
}
