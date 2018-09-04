<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //与商品关系   一对多
    public function shangpins()
    {
        return $this->hasMany('App\Sp');
    }

    //与拍卖商品关系  一对多
    public function paimais()
    {
        return $this->hasMany('App\Pm');
    }

    //与消息的关系 一对多
    public  function contents()
    {
        return $this->hasMany('App\Content');
    }

    //与广告位关系   一对多
    public  function guanggaos()
    {
        return $this->hasMany('App\Gg');
    }
}
