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
        "phone",
        "profile",
        "specialization",
    ];
}
