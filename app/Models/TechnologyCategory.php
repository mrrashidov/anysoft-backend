<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class TechnologyCategory extends Model
{
    use HasFactory, HasTranslations;
    protected $fillable = ['name'];
    protected array $translatable = ['name'];

    public function technologies(): HasMany{
        return $this->hasMany(Technology::class, 'category_id', 'id');
    }
}
