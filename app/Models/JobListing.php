<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobListing extends Model {

    use HasFactory;

    protected $fillable = ['title', 'salary', 'employer_id'];

    public function employer(): BelongsTo {
        return $this->belongsTo(Employer::class);
    }

    public function tag(): BelongsToMany {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
    }
};
