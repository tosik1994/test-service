<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;

class Operator extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function phone()
    {
        return $this->hasOne(Phone::class);
    }

}
