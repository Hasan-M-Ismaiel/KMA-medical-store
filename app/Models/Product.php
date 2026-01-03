<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'image',
        'short_description',
        'description',
        'dosage_form',
        'age_group',
        'usage_instructions',
        'warnings'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
