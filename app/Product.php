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
        return $this->belongsTo("App\Category", 'category_id');
    }
}
