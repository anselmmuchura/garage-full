<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;


    protected $fillable = [
        'regNo',
        'make',
        'model',
        'engineNo',
        'vinNo',
        'owner_id'
    ];

    public function owner()
    {
        return $this->hasOne(Owner::class);
    }
}