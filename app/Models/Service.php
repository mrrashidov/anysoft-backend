<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['name', 'about', 'image'];
    protected array $translatable = ['name', 'about'];


    public function projects(): HasManyThrough
    {
        return $this->hasManyThrough(
            Project::class,
            ProjectService::class,
            'service_id',
            'id',
            'id',
            'project_id'
        );
    }

    public function items(): HasMany
    {
        return $this->hasMany(ServiceItem::class, 'service_id', 'id');
    }
}
