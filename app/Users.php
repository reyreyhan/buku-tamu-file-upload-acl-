<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "user";
    public $timestamps = false;

    public function role() {
      return $this->hasOne('App\Role','id','id_role');
    }

    public function report() {
      return $this->hasMany('App\Report','id','id_user');
    }
}
