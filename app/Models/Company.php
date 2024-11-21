<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'child',
        'id_from_yandex',
        'name',
        'address',
        'phone',
        'site',
        'category',
        'viewed'
    ];
}
