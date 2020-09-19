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

    public function rating()
    {
        return $this->belongsToMany("App\Rating")->withPivot('rating_id');
    }

    public function type()
    {
        if($this->type_id==1){
            $type="Producto";
        }
        if($this->type_id==2){
            $type="Servicio";
        }
        return $type;
    }
}
