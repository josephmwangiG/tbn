<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoachBooking extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "coach_id" => "",
        "business_id" => "",
        "reason" => "",
        "message" => "",
        "start_date" => "",
        "duration" => "",
        "meeting_preference" => "",
        "status" => "",
    ];
}
