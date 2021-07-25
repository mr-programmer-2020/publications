<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        'author_id'

    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_publication', 'publication_id', 'category_id');
    }

    public function setImageAttribute($value)
    {
        $this->attributes['image'] = Storage::disk('public')->put("images", $value);
    }
}
