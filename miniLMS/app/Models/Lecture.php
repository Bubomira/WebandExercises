<?php

namespace App\Models;

use Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    /** @use HasFactory<\Database\Factories\LectureFactory> */
    use HasFactory;

    protected $guarded=[];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    protected static function booted()
{
    static::creating(function ($lecture) {
        $lecture->slug = static::generateUniqueSlug($lecture->title);
    });

    static::updating(function ($lecture) {
        if ($lecture->isDirty('title')) {
            $lecture->slug = static::generateUniqueSlug($lecture->title, $lecture->id);
        }
    });
}

protected static function generateUniqueSlug($title, $ignoreId = null)
{
    $slug = Str::slug($title);
    $originalSlug = $slug;
    $i = 2;

    while (static::where('slug', $slug)
        ->when($ignoreId, fn($query) => $query->where('id', '!=', $ignoreId))
        ->exists()) {
        $slug = $originalSlug . '-' . $i++;
    }

    return $slug;
}
    public function getRouteKeyName()
    {
        return 'slug';
    }

    
}
