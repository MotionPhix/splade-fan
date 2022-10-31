<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Kirschbaum\PowerJoins\PowerJoins;

class Customer extends Model
{
    use HasFactory;
    use PowerJoins;

    protected $fillable = [
        'first_name',
        'last_name',
        'company_id'
    ];

    public function phone(): MorphOne
    {
        return $this->morphOne(\App\Models\Phone::class, 'phoneable');
    }

    public function email(): MorphOne
    {
        return $this->morphOne(\App\Models\Email::class, 'emailable');
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Company::class);
    }

    public function projects(): HasMany
    {
        return $this->hasMany(\App\Models\Project::class);
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
