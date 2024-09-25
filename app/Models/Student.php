<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected function dob(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => date('Y-m-d', strtotime($value)),
        );
    }
    // protected function studentName(): Attribute
    // {
    //     return Attribute::make(
            
    //         get: fn (String $value) => ucfirst($value),
    //     );
    // }
}
