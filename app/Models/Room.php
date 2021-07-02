<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    
    // Table Name
    
    protected $table = 'rooms';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    
    public function type()
    {
        return $this->belongsTo('App\Models\Type', 'type_id');
    }

    public function scopeSearch($query, $q)
    {
        if ($q == null) return $query;
        return $query
                ->where('room_number', 'LIKE', "%{$q}%");
    }
}
