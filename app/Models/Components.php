<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Components extends Model
{
    use HasFactory;

    protected $fillable = [
        'rear_view_mirror',
        'windshield',
        'air_conditioning_operation',
        'dash_board_instrumentation',
        'internal_lighting',
        'floor_carpeting',
        'tyre_condition',
        'spear_wheel',
        'toolkit',
        'radio',
        'vehicle_id',
        'service_id'
    ];


    public function todos()
    {
        return $this->hasMany(Todo::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}