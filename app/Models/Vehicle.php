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
        'fullName',
        'email',
        'phoneNumber',
    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}