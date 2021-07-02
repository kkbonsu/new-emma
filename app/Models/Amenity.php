<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    use HasFactory;
    
    // Table Name
    
    protected $table = 'amenities';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    
    public function types()
    {
        return $this->belongsToMany(Type::class);
    }

    public function scopeSearch($query, $q)
    {
        if ($q == null) return $query;
        return $query
                ->where('name', 'LIKE', "%{$q}%");
    }
}
