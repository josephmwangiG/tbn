<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessOwner extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "business_id",
        "name",
        "email",
        "phone_number",
    ];
}
