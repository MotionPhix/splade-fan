<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'has_deadline',
        'customer_id'
    ];

    public function tasks(): HasMany
    {
        return $this->hasMany(\App\Models\Task::class);
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Customer::class);
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

    public function deadline()
    {
        $dt = Carbon::createFromDate($this->has_deadline);

        return $dt->diffForHumans();
    }

    public function is_past()
    {
        return Str::contains($this->deadline(), 'ago');
    }
}
