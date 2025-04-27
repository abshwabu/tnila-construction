<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'position',
        'bio',
        'image',
        'facebook_url',
        'twitter_url',
        'instagram_url',
        'linkedin_url',
        'email',
        'phone',
        'is_active',
        'display_order'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_active' => 'boolean',
        'display_order' => 'integer',
    ];

    /**
     * Scope a query to only include active team members.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Check if the team member has any social media links.
     *
     * @return bool
     */
    public function hasSocialLinks()
    {
        return $this->facebook_url || $this->twitter_url || $this->instagram_url || $this->linkedin_url;
    }
} 