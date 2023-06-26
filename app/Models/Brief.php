<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_ids',
        'task_text',
        'images',
        'name',
        'email',
        'company_name',
        'phone',
        'how_know_us',
        'budget_id'
    ];
    protected $casts = [
        'service_id' => 'json',
        'images' => 'json',
        'how_know_us' => 'json'
    ];

}
