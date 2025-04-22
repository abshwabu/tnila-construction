<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
use App\Models\Testimonial;

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
    
    return view('welcome', compact('recentProjects', 'totalProjects', 'testimonials'));
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
