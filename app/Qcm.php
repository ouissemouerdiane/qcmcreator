<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qcm extends Model
{
    protected $table = "qcms";

    public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
