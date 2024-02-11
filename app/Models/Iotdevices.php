<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iotdevices extends Model
{
    use HasFactory;

    protected $fillable = [
        'serialno',
        'name',
    ];

    public function iotled()
    {
        return $this->hasMany(Iotleds::class);
    }
}
