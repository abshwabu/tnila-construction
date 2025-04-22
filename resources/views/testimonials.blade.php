@extends('layouts.app')

@section('title', 'Client Testimonials | Tnila Construction')

@section('content')
    <!-- Page Banner -->
    <section class="page-header padding">
        <div class="container">
            <div class="page-content text-center">
                <h2>Client Testimonials</h2>
                <p>What our clients say about our construction services.</p>
            </div>
        </div>
    </section>

    @if($testimonials->count() > 0)
    <!-- Testimonials Section -->
    <section class="testimonial-section padding">
        <div class="container">
            <div class="row">
                @foreach($testimonials as $testimonial)
                <div class="col-lg-4 col-md-6 sm-padding">
                    <div class="testimonial-item box-shadow">
                        <div class="testi-thumb">
                            <img src="{{ asset($testimonial->image) }}" alt="{{ $testimonial->name }}">
                            <div class="quote-icon">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testi-content">
                            <p>"{{ $testimonial->content }}"</p>
                            <h3>{{ $testimonial->name }}</h3>
                            <ul class="rattings">
                                {!! $testimonial->getStarsHtml() !!}
                            </ul>
                            <span>{{ $testimonial->position }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @else
    <!-- No Testimonials Message -->
    <section class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="alert alert-info">
                        <h4>No Testimonials Yet</h4>
                        <p>We're currently collecting feedback from our clients. Please check back soon!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Call to Action -->
    <section class="cta-section padding">
        <div class="container">
            <div class="cta-content text-center">
                <h2>Ready to start your project with us?</h2>
                <p>Contact us today for a free consultation and estimate.</p>
                <a href="{{ route('contacts') }}" class="default-btn">Get in Touch</a>
            </div>
        </div>
    </section>
@endsection 