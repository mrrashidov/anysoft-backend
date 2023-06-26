<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Team extends Model
{
    use HasFactory, HasTranslations;

    protected array $translatable = ['name', 'role'];
    protected $fillable = ['image', 'role', 'name', 'link'];
}
