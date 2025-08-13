<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
    protected $fillable = [

        ];
    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }


    public function contracts(): HasMany
    {
        return $this->hasMany(Contract::class);
    }

    public function photos(): HasMany
    {
        return $this->hasMany(Photo::class);
    }
}
