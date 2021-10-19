<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incar extends Model
{
    use HasFactory;

    protected $fillable = [
        'incar',
        'checked',
        'component_id',
        'service_id'
    ];

    public function component()
    {
        return $this->belongsTo(Components::class);
    }
}
