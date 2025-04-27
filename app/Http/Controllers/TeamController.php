<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of team members.
     */
    public function index()
    {
        $teamMembers = TeamMember::active()
            ->orderBy('display_order')
            ->get();
            
        return view('team', compact('teamMembers'));
    }

    /**
     * Display the specified team member.
     */
    public function show($id)
    {
        $teamMember = TeamMember::findOrFail($id);
        
        return view('team-member', compact('teamMember'));
    }

    /**
     * Get active team members for display.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getActiveTeamMembers()
    {
        return TeamMember::active()
            ->orderBy('display_order')
            ->get();
    }
} 