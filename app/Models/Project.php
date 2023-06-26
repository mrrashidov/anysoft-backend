<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasFactory, HasTranslations;

    public $fillable = ['name', 'about', 'image', 'link', 'category_id', 'year'];
    public array $translatable = ['name', 'about'];
    protected $casts = [
        'year' => 'integer',
        'category_ids' => 'json'
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(
            ProjectCategory::class,
            CategoryProject::class,
            'project_id',
            'category_id'
        );
    }


    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(
            Technology::class,
            ProjectTechnology::class,
        );
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(
            Service::class,
            ProjectService::class,
            'project_id',
            'service_id'
        );
    }

}
