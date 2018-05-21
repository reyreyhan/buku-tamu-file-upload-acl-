<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = "report";
    public $timestamps = false;

    //
    public function user() {
      return $this->hasOne('App\Users','id','id_user');
    }
}
