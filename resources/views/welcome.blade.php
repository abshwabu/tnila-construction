@extends('layouts.app')

@section('title', 'Tnila | Construction & Building HTML Template')

@section('content')
    <div id="main-slider" class="dl-slider">
        <div class="single-slide">
            <div class="bg-img kenburns-top-right" style="background-image: url({{ asset('img/slider-1.jpg') }});"></div>
            <div class="overlay"></div>
            <div class="slider-content-wrap d-flex align-items-center text-left">
                <div class="container">
                    <div class="slider-content">
                        <div class="dl-caption medium">
                            <div class="inner-layer">
                                <div data-animation="fade-in-right" data-delay="1s">Residencial</div>
                            </div>
                        </div>
                        <div class="dl-caption big">
                            <div class="inner-layer">
                                <div data-animation="fade-in-left" data-delay="2s">We provide outstanding</div>
                            </div>
                        </div>
                        <div class="dl-caption big">
                            <div class="inner-layer">
                                <div data-animation="fade-in-left" data-delay="2.5s">construction services.</div>
                            </div>
                        </div>
                        <div class="dl-caption small">
                            <div class="inner-layer">
                                <div data-animation="fade-in-left" data-delay="3s">We have provided complete
                                    remodeling and construction solutions for <br>residential and commercial properties
                                    in cities.</div>
                            </div>
                        </div>
                        <div class="dl-btn-group">
                            <div class="inner-layer">
                                <a href="{{ route('projects') }}" class="dl-btn" data-animation="fade-in-left"
                                    data-delay="3.5s">View Projects <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide">
            <div class="bg-img kenburns-top-right" style="background-image: url({{ asset('img/slider-2.jpg') }});"></div>
            <div class="overlay"></div>
            <div class="slider-content-wrap d-flex align-items-center text-center">
                <div class="container">
                    <div class="slider-content">
                        <div class="dl-caption medium">
                            <div class="inner-layer">
                                <div data-animation="fade-in-top" data-delay="1s">Residencial</div>
                            </div>
                        </div>
                        <div class="dl-caption big">
                            <div class="inner-layer">
                                <div data-animation="fade-in-bottom" data-delay="2s">We are professional</div>
                            </div>
                        </div>
                        <div class="dl-caption big">
                            <div class="inner-layer">
                                <div data-animation="fade-in-bottom" data-delay="2.5s">for building construction.
                                </div>
                            </div>
                        </div>
                        <div class="dl-caption small">
                            <div class="inner-layer">
                                <div data-animation="fade-in-bottom" data-delay="3s">We have provided complete
                                    remodeling and construction solutions for <br>residential and commercial properties
                                    in cities.</div>
                            </div>
                        </div>
                        <div class="dl-btn-group">
                            <div class="inner-layer">
                                <a href="{{ route('projects') }}" class="dl-btn" data-animation="fade-in-bottom"
                                    data-delay="3.5s">View Projects <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide">
            <div class="bg-img kenburns-top-right" style="background-image: url({{ asset('img/slider-3.jpg') }});"></div>
            <div class="overlay"></div>
            <div class="slider-content-wrap d-flex align-items-center text-right">
                <div class="container">
                    <div class="slider-content">
                        <div class="dl-caption medium">
                            <div class="inner-layer">
                                <div data-animation="fade-in-left" data-delay="1s">Residencial</div>
                            </div>
                        </div>
                        <div class="dl-caption big">
                            <div class="inner-layer">
                                <div data-animation="fade-in-right" data-delay="2s">We will be happy to take care
                                </div>
                            </div>
                        </div>
                        <div class="dl-caption big">
                            <div class="inner-layer">
                                <div data-animation="fade-in-right" data-delay="2.5s">of your construction works.
                                </div>
                            </div>
                        </div>
                        <div class="dl-caption small">
                            <div class="inner-layer">
                                <div data-animation="fade-in-right" data-delay="3s">We have provided complete
                                    remodeling and construction solutions for <br>residential and commercial properties
                                    in cities.</div>
                            </div>
                        </div>
                        <div class="dl-btn-group">
                            <div class="inner-layer">
                                <a href="{{ route('projects') }}" class="dl-btn" data-animation="fade-in-right"
                                    data-delay="3.5s">View Projects <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="promo-section padding">
        <div class="container">
            <div class="row promo-wrap">
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="promo-item box-shadow text-center wow fadeInUp" data-wow-delay="100ms">
                        <i class="flaticon-factory"></i>
                        <h3>Professional Liability</h3>
                        <p>We are committed to building a sustainable future by fostering a collaborative spirit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="promo-item box-shadow text-center wow fadeInUp" data-wow-delay="300ms">
                        <i class="flaticon-worker"></i>
                        <h3>Dedicated To Clients</h3>
                        <p>We are committed to building a sustainable future by fostering a collaborative spirit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="promo-item box-shadow text-center wow fadeInUp" data-wow-delay="400ms">
                        <i class="flaticon-gear"></i>
                        <h3>Outstanding Services</h3>
                        <p>We are committed to building a sustainable future by fostering a collaborative spirit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="promo-item box-shadow text-center wow fadeInUp" data-wow-delay="500ms">
                        <i class="flaticon-worker-1"></i>
                        <h3>Clients Satisfaction</h3>
                        <p>We are committed to building a sustainable future by fostering a collaborative spirit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service-section section-2 bg-grey padding">
        <div class="dots"></div>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 sm-padding">
                    <div class="service-content wow fadeInLeft">
                        <span>Explore The Features</span>
                        <h2>Offering the most complete integrated package!</h2>
                        <p>We are committed to building a sustainable future by fostering a collaborative spirit that
                            creates exceptional experiences, balanced relationships, and community built environment.
                            Building isn't just job. It's our passion. With every project we undertake, we set the bar
                            high and provide the best industry.</p>
                        <p>Building isn't just job. It's our passion. With every project we undertake, we set the bar
                            high and provide the best industry.</p>
                        <a href="#" class="default-btn">Our All Services</a>
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="row services-list">
                        <div class="col-md-6 padding-15">
                            <div class="service-item box-shadow wow fadeInUp" data-wow-delay="100ms">
                                <i class="flaticon-loader"></i>
                                <h3>General Building</h3>
                                <p>We are committed building a sustainable future fostering a collaborative spirit.</p>
                            </div>
                        </div>
                        <div class="col-md-6 padding-15 offset-top">
                            <div class="service-item box-shadow wow fadeInUp" data-wow-delay="300ms">
                                <i class="flaticon-tanks"></i>
                                <h3>Building Construction</h3>
                                <p>We are committed building a sustainable future fostering a collaborative spirit.</p>
                            </div>
                        </div>
                        <div class="col-md-6 padding-15">
                            <div class="service-item box-shadow wow fadeInUp" data-wow-delay="400ms">
                                <i class="flaticon-refinery"></i>
                                <h3>Refurbishments</h3>
                                <p>We are committed building a sustainable future fostering a collaborative spirit.</p>
                            </div>
                        </div>
                        <div class="col-md-6 padding-15 offset-top">
                            <div class="service-item box-shadow wow fadeInUp" data-wow-delay="500ms">
                                <i class="flaticon-control-system"></i>
                                <h3>Building Renovation</h3>
                                <p>We are committed building a sustainable future fostering a collaborative spirit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="counter-section padding">
        <div class="container">
            <div class="row counter-wrap">
                <div class="col-lg-3 col-sm-6 padding-15">
                    <div class="counter-content wow fadeInUp" data-wow-delay="100ms">
                        <div class="counter"><span class="odometer" data-count="100">00</span></div>
                        <h4>Partners Worldwide</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 padding-15">
                    <div class="counter-content wow fadeInUp" data-wow-delay="200ms">
                        <div class="counter"><span class="odometer" data-count="325">00</span></div>
                        <h4>Employees and Stuffs</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 padding-15">
                    <div class="counter-content wow fadeInUp" data-wow-delay="300ms">
                        <div class="counter"><span class="odometer" data-count="10">00</span></div>
                        <h4>Year Of Experience</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 padding-15">
                    <div class="counter-content wow fadeInUp" data-wow-delay="400ms">
                        <div class="counter"><span class="odometer" data-count="554">00</span></div>
                        <h4>Projects Completed</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if($recentProjects->count() > 0)
        <section class="projects-section padding">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-8 col-md-6 sm-padding">
                        <div class="section-heading mb-40">
                            <span>Projects</span>
                            <h2>Discover the most fascinating <br>projects for our clients</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-padding text-right">
                        @if($totalProjects > 4)
                            <a href="{{ route('projects') }}" class="default-btn">View All Projects</a>
                        @endif
                    </div>
                </div>
                <div id="projects-carousel" class="projects-carousel box-shadow owl-carousel">
                    @foreach($recentProjects as $project)
                        <div class="project-item">
                            <img src="{{ $project->image ? asset($project->image) : asset('img/project-placeholder.jpg') }}" alt="{{ $project->name }}">
                            <div class="overlay"></div>
                            <a href="{{ $project->image ? asset($project->image) : asset('img/project-placeholder.jpg') }}" class="view-icon img-popup" data-gall="project">
                                <i class="fas fa-expand"></i>
                            </a>
                            <div class="projects-content">
                                <a href="#" class="category">{{ $project->category }}</a>
                                <h3><a href="{{ route('projects.show', $project->slug) }}" class="tittle">{{ $project->name }}</a></h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <section class="team-section bg-gray padding">
        <div class="dots"></div>
        <div class="container">
            <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="100ms">
                <span>Team</span>
                <h2>Speciallized team</h2>
            </div>
            <div class="row team-wrap box-shadow">
                <div class="col-lg-3 col-sm-6 padding-15">
                    <div class="team-item">
                        <div class="overlay"></div>
                        <img src="{{ asset('img/Worker-1.jpg') }}" alt="team">
                        <div class="team-content">
                            <h3>Jhon Castellon</h3>
                            <span>Architect</span>
                        </div>
                        <ul class="team-social">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                            <li><a href="#"><i class="ti-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 padding-15">
                    <div class="team-item">
                        <div class="overlay"></div>
                        <img src="{{ asset('img/Worker-2.jpg') }}" alt="team">
                        <div class="team-content">
                            <h3>José Carpio</h3>
                            <span>Designer</span>
                        </div>
                        <ul class="team-social">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                            <li><a href="#"><i class="ti-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 padding-15">
                    <div class="team-item">
                        <div class="overlay"></div>
                        <img src="{{ asset('img/Worker-3.jpg') }}" alt="team">
                        <div class="team-content">
                            <h3>Valentin Lacoste</h3>
                            <span>Developer</span>
                        </div>
                        <ul class="team-social">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                            <li><a href="#"><i class="ti-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 padding-15">
                    <div class="team-item">
                        <div class="overlay"></div>
                        <img src="{{ asset('img/Worker-4.jpg') }}" alt="team">
                        <div class="team-content">
                            <h3>Kyle Frederick</h3>
                            <span>Marketer</span>
                        </div>
                        <ul class="team-social">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                            <li><a href="#"><i class="ti-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-section padding">
        <div class="container">
            <div class="row content-wrap">
                <div class="col-lg-6 sm-padding wow fadeInLeft" data-wow-delay="100ms">
                    <img class="box-shadow" src="{{ asset('img/content-1.jpg') }}" alt="img">
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="content-info wow fadeInRight" data-wow-delay="300ms">
                        <span>Explore The Features</span>
                        <h2>Offering the most complete integrated package!</h2>
                        <p>We are committed to building a sustainable future by fostering a collaborative spirit that
                            creates exceptional experiences, balanced relationships, and community built environment.
                            Building isn't just job. It's our passion. With every project we undertake, we set the bar
                            high and provide the best industry.</p>
                        <a href="{{ route('contacts') }}" class="default-btn">Get Free Quote</a>
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
    <section class="blog-section padding">
        <div class="container">
            <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="100ms">
                <span>From Blog</span>
                <h2>Speciallized news</h2>
            </div>
            <div class="row blog-wrap">
                <div class="col-lg-4 col-sm-6 sm-padding">
                    <div class="blog-item box-shadow">
                        <div class="blog-thumb">
                            <img src="{{ asset('img/post-1.jpg') }}" alt="post">
                            <span class="category"><a href="#">interior</a></span>
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Minimalist trending in modern architecture 2019</a></h3>
                            <p>Building first evolved out dynamics between needs means available building materials
                                attendant skills.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 sm-padding">
                    <div class="blog-item box-shadow">
                        <div class="blog-thumb">
                            <img src="{{ asset('img/post-2.jpg') }}" alt="post">
                            <span class="category"><a href="#">Architecture</a></span>
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Terrace in the town yamazaki kentaro design workshop.</a></h3>
                            <p>Building first evolved out dynamics between needs means available building materials
                                attendant skills.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 sm-padding">
                    <div class="blog-item box-shadow">
                        <div class="blog-thumb">
                            <img src="{{ asset('img/post-3.jpg') }}" alt="post">
                            <span class="category"><a href="#">Design</a></span>
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">W270 house são paulo arquitetos fabio jorge architeqture.</a></h3>
                            <p>Building first evolved out dynamics between needs means available building materials
                                attendant skills.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sponsor-section bg-grey">
        <div class="dots"></div>
        <div class="container">
            <div id="sponsor-carousel" class="sponsor-carousel owl-carousel">
                <div class="sponsor-item">
                    <img src="{{ asset('img/sponsor1.png') }}" alt="sponsor">
                </div>
                <div class="sponsor-item">
                    <img src="{{ asset('img/sponsor2.png') }}" alt="sponsor">
                </div>
                <div class="sponsor-item">
                    <img src="{{ asset('img/sponsor3.png') }}" alt="sponsor">
                </div>
                <div class="sponsor-item">
                    <img src="{{ asset('img/sponsor4.png') }}" alt="sponsor">
                </div>
                <div class="sponsor-item">
                    <img src="{{ asset('img/sponsor5.png') }}" alt="sponsor">
                </div>
                <div class="sponsor-item">
                    <img src="{{ asset('img/sponsor6.png') }}" alt="sponsor">
                </div>
                <div class="sponsor-item">
                    <img src="{{ asset('img/sponsor7.png') }}" alt="sponsor">
                </div>
                <div class="sponsor-item">
                    <img src="{{ asset('img/sponsor8.png') }}" alt="sponsor">
                </div>
            </div>
        </div>
    </div>
@endsection
