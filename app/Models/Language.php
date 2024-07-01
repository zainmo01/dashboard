<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeActive($item)
    {
        return $item->where('active', 1);
    }

    public function scopeSelection($item)
    {
        return $item->select('abbr', 'name', 'direction', 'active');
    }
}
