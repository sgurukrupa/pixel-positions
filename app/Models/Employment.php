<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employment extends Model
{
    /** @use HasFactory<\Database\Factories\EmploymentFactory> */
    use HasFactory;

    public function employer() : BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}
