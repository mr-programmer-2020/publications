<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'parent_id'
    ];

    public function publications()
    {
        return $this->belongsToMany(Publication::class, 'category_publication', 'category_id', 'publication_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }
}
