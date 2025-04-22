<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Get active testimonials for display.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getActiveTestimonials()
    {
        return Testimonial::active()
            ->orderBy('display_order')
            ->get();
    }
} 