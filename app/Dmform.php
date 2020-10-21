<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dmform extends Model
{
    protected $fillable = [
        'purpose_id','customer_id', 'user_id'
    ];

    public function purpose() {
        return $this->belongsTo('App\Purpose');
    }
    public function customer() {
        return $this->belongsTo('App\Customer');
    }
    public function products() {
        return $this->hasMany('App\TakenProduct');
    }
    public function user() {
        return $this->belongsTo('App\User');
    }

}
