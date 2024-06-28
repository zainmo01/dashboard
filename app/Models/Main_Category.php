<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main_Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'id',
        'translation_lang',
        'translation_of',
        'name',
        'slug',
        'photo',
        'active',
        'created_at',
        'updated_at',
    ];




    public function scopeActive($item)
    {
        return $item->where('active', 1);
    }
}
