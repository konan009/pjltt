<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    public $primary = 'id';
    public $timestamps = false;

    public function tour()
    {
        return $this->hasOne('App\Tour','id', 'packageitenary_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
