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
        if (isset($filters['title']) && isset($filters['category_id']) && isset($filters['city'])) {
            $query->where("title", 'like', '%' . strtolower($filters['title']) . '%')
                ->where('category_id', $filters['category_id'])
                ->where('city', $filters['city']);
        }

        if (isset($filters['title']) && isset($filters['category_id'])) {
            $query->where("title", 'like', '%' . strtolower($filters['title']) . '%')
                ->where('category_id', $filters['category_id']);
        }

        if (isset($filters['title']) && isset($filters['city'])) {
            $query->where("title", 'like', '%' . strtolower($filters['title']) . '%')
                ->where('city', $filters['city']);
        }

        if (isset($filters['category_id']) && isset($filters['city'])) {
            $query->where('category_id', $filters['category_id'])
                ->where('city', $filters['city']);
        }

        if (isset($filters['title'])) {
            $query->where("title", 'like', '%' . strtolower($filters['title']) . '%');
        }

        if (isset($filters['category_id'])) {
            $query->where('category_id', $filters['category_id']);
        }

        if (isset($filters['city'])) {
            $query->where('city', $filters['city']);
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
