<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailConf extends Model
{
    protected $table = 'mail';
    public $primary = 'id';
    public $timestamps = false;

    protected $fillable = ['user_id','	code'];
}
