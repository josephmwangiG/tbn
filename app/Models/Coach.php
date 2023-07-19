<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coach extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "user_id",
        "name",
        "website",
        "highest_level_of_education",
        "description",
        "status",
        "phone_number",
        "profile",
        "specialization",
        "current_employment",
        "current_employer",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class, 'coach_id');
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class, 'coach_id');
    }
}
