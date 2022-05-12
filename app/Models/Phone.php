<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    public function phoneType()
    {
        return $this->hasOne(PhoneType::class, 'id');
    }

    public function operator()
    {
        return $this->hasOne(Operator::class, 'id');
    }

}
