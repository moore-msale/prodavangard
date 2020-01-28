<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function catalog()
		{
		    return $this->belongsTo(Catalog::class);
		}
	public function sub_category()
	    {
	        return $this->hasMany(sub_category::class);
	    }
}
