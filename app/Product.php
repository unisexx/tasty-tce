<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Product extends Model
{
    use Resizable;

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function productCategory()
    {
        return $this->belongsTo('App\ProductCategory');
    }
}
