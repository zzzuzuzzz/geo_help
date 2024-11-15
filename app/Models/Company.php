<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_from_yandex',
        'name',
        'address',
        'site',
        'category',
        'work_time',
        'viewed'
    ];
}
