<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingEvent extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'location',
        'description',
        'duration',
        'image',
        'registration_deadline',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
