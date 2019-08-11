<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function scopeFilter($query, $filters)
    {
        if (isset($filters['category_id'])) {
            $query->where('category_id', $filters['category_id']);
        }
    }

    public function getFirstPhotoPathAttribute()
    {
        if (!$this->photos()->count()) {
            return null;
        }

        return $this->photos()->first()->path;
    }
}
