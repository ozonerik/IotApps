<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Iotdevices extends Model
{
    use HasFactory;

    protected $fillable = [
        'serialno',
        'name',
    ];

    public function iotled(): HasOne
    {
        return $this->hasOne(Iotleds::class);
    }
}
