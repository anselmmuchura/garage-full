<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'kilometers',
        'fuel',
        'timeOut',
        'battery',
        'vehicle_id'
    ];


    public function component()
    {
        return $this->hasOne(Component::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

}
