<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneType extends Model
{
    use HasFactory;


    protected $fillable = [
      'name_ru',
      'name_ua',
      'short_name',
    ];

    public function phone()
    {
        return $this->hasOne(Phone::class);
    }

}
