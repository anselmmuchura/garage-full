<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'checked',
        'components_id',
        'service_id'
    ];

    public function component()
    {
        return $this->belongsTo(Components::class);
    }
}
