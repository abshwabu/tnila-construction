<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
use App\Models\Testimonial;
use App\Models\TeamMember;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // Get the 4 most recent projects
    $recentProjects = Project::orderBy('project_year', 'desc')
        ->take(4)
        ->get();
    
    // Count total projects to determine if "View All" should be shown
    $totalProjects = Project::count();
    
    // Get active testimonials
    $testimonials = Testimonial::active()
        ->orderBy('display_order')
        ->get();
    
    // Get active team members
    $teamMembers = TeamMember::active()
        ->orderBy('display_order')
        ->take(4)
        ->get();
    
    return view('welcome', compact('recentProjects', 'totalProjects', 'testimonials', 'teamMembers'));
})->name('home');

Route::get('/about', function () {
    // Get active testimonials for about page
    $testimonials = Testimonial::active()
        ->orderBy('display_order')
        ->get();
        
    return view('about', compact('testimonials'));
})->name('about');

Route::get('/test-images', function () {
    return view('test-images');
})->name('test-images');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/testimonials', function () {
    $testimonials = Testimonial::active()
        ->orderBy('display_order')
        ->get();
        
    return view('testimonials', compact('testimonials'));
})->name('testimonials');

// Team routes
Route::get('/team', [App\Http\Controllers\TeamController::class, 'index'])->name('team');
Route::get('/team/{id}', [App\Http\Controllers\TeamController::class, 'show'])->name('team.show');
