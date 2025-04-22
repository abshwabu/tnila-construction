@extends('layouts.app')

@section('title', 'About Us | Tnila Construction')

@section('content')
    <!-- Page Banner -->
    <section class="page-header padding">
        <div class="container">
        <div class="page-content text-center">
        <h2>About us</h2>
        <p>Construction & Building Html Template.</p>
        </div>
        </div>
        </section>
        <section class="about-section padding">
        <div class="container">
        <div class="row about-wrap">
        <div class="col-lg-6 sm-padding">
        <div class="about-content wow fadeInLeft">
        <h2>We are the expart on this field better solution since 1984.</h2>
        <p>We are committed to building a sustainable future by fostering a collaborative spirit that creates exceptional experiences, balanced relationships, and community built environment. Building isn't just job. It's our passion. With every project we undertake, we set the bar high and provide the best industry.</p>
        <a href="#" class="default-btn">More About Us</a>
        </div>
        </div>
        <div class="col-lg-6 sm-padding">
        <ul class="about-promo">
        <li class="about-promo-item wow fadeInUp">
        <i class="flaticon-factory"></i>
        <div>
        <h3>Professional Liability</h3>
        <p>We are committed to building a sustainable future by fostering a collaborative spirit.</p>
        </div>
        </li>
        <li class="about-promo-item wow fadeInUp" data-wow-delay="300ms">
        <i class="flaticon-worker"></i>
        <div>
        <h3>Dedicated To Our Clients</h3>
        <p>We are committed to building a sustainable future by fostering a collaborative spirit.</p>
        </div>
        </li>
        <li class="about-promo-item wow fadeInUp" data-wow-delay="500ms">
        <i class="flaticon-gear"></i>
        <div>
        <h3>Outstanding Services</h3>
        <p>We are committed to building a sustainable future by fostering a collaborative spirit.</p>
        </div>
        </li>
        </ul>
         </div>
        </div>
        </div>
        </section>
        <section class="work-pro-section padding">
        <div class="container">
        <div class="row">
        <div class="col-lg-3 col-sm-6 sm-padding">
        <div class="work-pro-item text-center">
        <span class="number">1</span>
        <div class="number-line"></div>
        <h3>Planning & Research</h3>
        <p>We are committed building a sustainable future fostering a collaborative spirit.</p>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 sm-padding">
        <div class="work-pro-item text-center">
        <span class="number">2</span>
        <div class="number-line"></div>
        <h3>Design & Ideas</h3>
        <p>We are committed building a sustainable future fostering a collaborative spirit.</p>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 sm-padding">
        <div class="work-pro-item text-center">
        <span class="number">3</span>
        <div class="number-line"></div>
        <h3>Specialized Projects</h3>
        <p>We are committed building a sustainable future fostering a collaborative spirit.</p>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 sm-padding">
        <div class="work-pro-item text-center">
        <span class="number">4</span>
        <h3>Final Outputs</h3>
        <p>We are committed building a sustainable future fostering a collaborative spirit.</p>
        </div>
        </div>
        </div>
        </div>
        </section>
        <section class="content-section padding">
        <div class="container">
        <div class="row content-wrap">
        <div class="col-lg-6 sm-padding wow fadeInLeft" data-wow-delay="100ms">
        <img class="box-shadow" src="img/content-1.jpg" alt="img">
        </div>
        <div class="col-lg-6 sm-padding">
        <div class="content-info wow fadeInRight" data-wow-delay="300ms">
        <span>Explore The Features</span>
        <h2>Offering the most complete integrated package!</h2>
        <p>We are committed to building a sustainable future by fostering a collaborative spirit that creates exceptional experiences, balanced relationships, and community built environment. Building isn't just job. It's our passion. With every project we undertake, we set the bar high and provide the best industry.</p>
        <a href="#" class="default-btn">Get Free Quote</a>
        </div>
        </div>
        </div>
        </div>
        </section>
        @if($testimonials->count() > 0)
        <section class="testimonial-section bg-grey padding">
            <div class="dots"></div>
            <div class="container">
                <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="100ms">
                    <span>Testimonial</span>
                    <h2>What people says</h2>
                </div>
                <div id="testimonial-carousel" class="testimonial-carousel box-shadow owl-carousel">
                    @foreach($testimonials as $testimonial)
                    <div class="testi-item d-flex align-items-center">
                        <img src="{{ asset($testimonial->image) }}" alt="{{ $testimonial->name }}">
                        <div class="testi-content">
                            <p>"{{ $testimonial->content }}"</p>
                            <h3>{{ $testimonial->name }}</h3>
                            <ul class="rattings">
                                {!! $testimonial->getStarsHtml() !!}
                            </ul>
                            <span>{{ $testimonial->position }}</span>
                        </div>
                        <i class="fa fa-quote-right"></i>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif
@endsection