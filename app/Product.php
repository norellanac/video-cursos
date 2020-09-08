<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function status()
    {
        return $this->belongsTo("App\Status", 'status_id');
    }

    public function category()
    {
        return $this->belongsToMany("App\Category")->withPivot('category_id');
    }

    public function subcategory()
    {
        return $this->belongsToMany("App\Subcategory")->withPivot('subcategory_id');
    }
}
