<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subcategory()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }

    // public function children()
    // {
    //     return $this->subcategory()->where('parent_id', $this->id);
    // }
}
