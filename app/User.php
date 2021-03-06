<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public $primary = 'id';
    protected $redirectTo = '/';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','lname','position','email_conf'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function book()
    {
        return $this->hasMany('App\Book')->select('id','enddate','status','guest','packageitenary_id');
    }

    public function mail()
    {
        return $this->hasOne('App\MailConf');
    }
}
