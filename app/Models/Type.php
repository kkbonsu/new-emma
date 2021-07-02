<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    
    // Table Name
    protected $table = 'types';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function rooms()
    {
        return $this->hasMany('App\Models\Room');
    }
    
    public function amenities()
    {
        return $this->belongsToMany(Amenity::class);
    }
    
    public function scopeSearch($query, $q)
    {
        if ($q == null) return $query;
        return $query
                ->where('name', 'LIKE', "%{$q}%");
    }
}
