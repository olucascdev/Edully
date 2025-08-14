<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ClassGroup extends Model
{
    /** @use HasFactory<\Database\Factories\ClassGroupFactory> */
    use HasFactory;

    protected $fillable = [
        'course_id',
        'classroom_id',
        'name',
        'turn',
        'school_year',
    ];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class, );
    }
}
