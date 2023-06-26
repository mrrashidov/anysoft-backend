<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Technology extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'category_id'];
    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(TechnologyCategory::class, 'category_id', 'id');
    }

}
