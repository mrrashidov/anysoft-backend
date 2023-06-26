<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Review extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['company_logo', 'person_logo', 'text', 'company_name', 'person_name'];
    protected array $translatable = ['text', 'company_name', 'person_name'];
}
