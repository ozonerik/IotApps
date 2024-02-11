<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Iotleds extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'iotdevice_id',
    ];

    public function Iotdevice(): BelongsTo
    {
        return $this->belongsTo(Iotdevices::class);
    }
}
