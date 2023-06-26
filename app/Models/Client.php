<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public $fillable = ['image', 'name', 'service_id', 'year'];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
