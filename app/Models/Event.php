<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'location',
        'date',
        'user_id'
    ];

    protected $casts = [
        'id'
    ];

    public function user() // The user who created the event
    {
        return $this->belongsTo(User::class);
    }

    public function attendess() // The attendess ot he event
    {
        return $this->belongsToMany(User::class, 'user_event_attendees');
    }
}
