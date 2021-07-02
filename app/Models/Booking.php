<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    
    // Table Name
    
    protected $table = 'bookings';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function scopeSearch($query, $q)
    {
        if ($q == null) return $query;
        return $query
                ->where('booking_code', 'LIKE', "%{$q}%");
    }
}
