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
        "description",
        "annual_revenue",
        "years_of_operation",
        "website",
        "status",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function owners()
    {
        return $this->hasMany(BusinessOwner::class, 'business_id');
    }

    public function bookings()
    {
        return $this->hasMany(EventAttendant::class, 'business_id');
    }
}
