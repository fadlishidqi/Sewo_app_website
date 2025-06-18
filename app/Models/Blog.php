<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime:Y-m-d H:i:s',
    ];

    // Auto generate slug
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            if (!$blog->slug) {
                $blog->slug = Str::slug($blog->title);
            }
            
            // Set published_at ke waktu sekarang jika belum diset dan is_published true
            if ($blog->is_published && !$blog->published_at) {
                $blog->published_at = now();
            }
        });

        static::updating(function ($blog) {
            if ($blog->isDirty('title')) {
                $blog->slug = Str::slug($blog->title);
            }
            
            // Set published_at ketika pertama kali dipublish
            if ($blog->isDirty('is_published') && $blog->is_published && !$blog->published_at) {
                $blog->published_at = now();
            }
        });
    }

    // Scope untuk blog yang published
    public function scopePublished($query)
    {
        return $query->where('is_published', true)
                    ->where('published_at', '<=', now());
    }

    // Accessor untuk format tanggal Indonesia
    public function getFormattedPublishedAtAttribute()
    {
        return $this->published_at ? 
               $this->published_at->timezone('Asia/Jakarta')->format('d M Y H:i') . ' WIB' : 
               null;
    }
}