<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'avatar'
    ];

    public function publications()
    {
        return $this->hasMany(Publication::class);
    }

    public function setAvatarAttribute($value)
    {
        $this->attributes['avatar'] = Storage::disk('public')->put("avatars", $value);
    }


}
