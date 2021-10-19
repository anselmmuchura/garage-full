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

    public static function formatPhoneNumber($phone){
        $phone = (substr($phone, 0, 1) == "+") ? str_replace("+", "", $phone) : $phone;
        $phone = (substr($phone, 0, 1) == "0") ? preg_replace("/^0/", "0", $phone) : $phone;
        $phone = (substr($phone, 0, 1) == "7") ? "0{$phone}" : $phone;

        return $phone;
    }
}
