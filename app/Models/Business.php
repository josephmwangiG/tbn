<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Business extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "user_id",
        "business_name",
        "email",
        "address",
        "number_of_employees",
        "specialization",
        "phone_number",
        "owners",
        "description",
        "annual_revenue",
        "years_of_operation",
    ];
}
