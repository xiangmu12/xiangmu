<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HuoDong extends Model
{
    use SoftDeletes;

	protected $dates = ['deleted_at'];
}
