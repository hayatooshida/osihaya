<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id','total_price'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function order_details(){
        return $this->hasMany(OrderDetail::class);
    }
}
