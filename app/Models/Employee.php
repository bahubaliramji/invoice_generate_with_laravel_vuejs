<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }

    public function getNameAddressAttribute()
    {
        return "{$this->name} {$this->address}";
    }
}
