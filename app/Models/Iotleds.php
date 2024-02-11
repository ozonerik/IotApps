<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iotleds extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'iotdevices_id',
    ];

    public function iotdevice()
    {
        return $this->belongsTo(Iotdevices::class);
    }
}
