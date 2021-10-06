<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'todo',
        'checked',
        'component_id',
        'service_id'
    ];

    public function component()
    {
        return $this->belongsTo(Components::class);
    }
}
