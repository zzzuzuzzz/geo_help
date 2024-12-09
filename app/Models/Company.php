<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'category_id',
        'viewed',
        'hide'
    ];

    public function companiesTypes(): BelongsTo
    {
        return $this->belongsTo(CompanyType::class, 'category_id');
    }
}
