<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    public function jobListing(): BelongsToMany {
        return $this->belongsToMany(JobListing::class, relatedPivotKey: 'job_listing_id');
    }
}
