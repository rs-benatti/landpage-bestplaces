<?php

namespace App;

use Balping\HashSlug\HasHashSlug;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasHashSlug;

    public function sent(){
        return $this->hasMany('App\UserEmail','email_id')->where('delivered','=','YES');
    }
}
