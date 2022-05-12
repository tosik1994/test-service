<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_for_banner',
        'description',
        'img',
        'is_banner',
        'type_service_id',
        'content',
    ];
}
