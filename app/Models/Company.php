<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function logo()
    {
        return $this->morphOne(\App\Models\Logo::class, 'logo');
    }

    public function phone()
    {
        return $this->morphOne(\App\Models\Phone::class, 'phoneable');
    }

    public function email()
    {
        return $this->morphOne(\App\Models\Email::class, 'emailable');
    }

    public function customers()
    {
        return $this->hasMany(\App\Models\Customer::class);
    }

    public function updatedAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => date('d.m.Y', strtotime($value))
        );
    }

    public function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => date('d.m.Y', strtotime($value))
        );
    }
}
