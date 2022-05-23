<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_ua',
        'title_ru',
        'title_for_banner_ua',
        'title_for_banner_ru',
        'description_ua',
        'description_ru',
        'img',
        'is_banner',
        'type_service_id',
        'content',
    ];

    public function typeService()
    {
        return $this->belongsTo(TypeService::class);
    }
}
