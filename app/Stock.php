<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
      'user_id', 'product_name', 'quantity_in_stock', 'price_per_item'
    ];

    public function user()
    {
      return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
