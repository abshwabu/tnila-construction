<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 'description', 'architects', 'location', 'category', 
        'area', 'project_year', 'budget', 'client_name', 'status',
        'image', 'is_featured', 'slug', 'project_manager', 'duration'
    ];
    
    protected $casts = [
        'is_featured' => 'boolean',
        'project_year' => 'integer',
    ];
}
