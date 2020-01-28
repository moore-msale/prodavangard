<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sub_category extends Model
{
	public function products()
    {
        return $this->hasMany(Product::class);
    }
}
