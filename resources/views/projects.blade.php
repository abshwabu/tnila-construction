@extends('layouts.app')

@section('title', 'Our Projects | Tnila Construction')

@section('content')
    <!-- Page Banner -->
    <section class="page-header padding">
        <div class="container">
            <div class="page-content text-center">
                <h2>Our Projects</h2>
                <p>Explore our portfolio of completed construction projects.</p>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects-section padding">
        <div class="container">
            <div class="row">
                @if($projects->count() > 0)
                    @foreach($projects as $project)
                        <div class="col-lg-4 col-sm-6 padding-15">
                            <div class="project-item">
                                <img src="{{ $project->image ? asset($project->image) : asset('img/project-placeholder.jpg') }}" alt="{{ $project->name }}">
                                <div class="overlay"></div>
                                <a href="{{ asset($project->image ?? 'img/project-placeholder.jpg') }}" class="view-icon img-popup" data-gall="project">
                                    <i class="fas fa-expand"></i>
                                </a>
                                <div class="projects-content">
                                    <a href="#" class="category">{{ $project->category }}</a>
                                    <h3><a href="{{ route('projects.show', $project->slug) }}" class="tittle">{{ $project->name }}</a></h3>
                                    <span class="location"><i class="ti-location-pin"></i> {{ $project->location }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center padding-30">
                        <div class="alert alert-info">
                            <h4>No Projects Yet</h4>
                            <p>We're currently working on adding our portfolio. Please check back soon!</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <div class="sponsor-section bg-grey">
        <div class="dots"></div>
        <div class="container">
            <div id="sponsor-carousel" class="sponsor-carousel owl-carousel">
                <div class="sponsor-item">
                    <img src="img/sponsor1.png" alt="sponsor">
                </div>
                <div class="sponsor-item">
                    <img src="img/sponsor2.png" alt="sponsor">
                </div>
                <div class="sponsor-item">
                    <img src="img/sponsor3.png" alt="sponsor">
                </div>
                <div class="sponsor-item">
                    <img src="img/sponsor4.png" alt="sponsor">
                </div>
                <div class="sponsor-item">
                    <img src="img/sponsor5.png" alt="sponsor">
                </div>
                <div class="sponsor-item">
                    <img src="img/sponsor6.png" alt="sponsor">
                </div>
                <div class="sponsor-item">
                    <img src="img/sponsor7.png" alt="sponsor">
                </div>
                <div class="sponsor-item">
                    <img src="img/sponsor8.png" alt="sponsor">
                </div>
            </div>
        </div>
    </div>
    <section class="widget-section padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="widget-content">
                        <a href="#"><img src="img/logo-light.png" alt="brand"></a>
                        <p>Building your own home is about desire, fantasy. But it's achievable anyone can do it.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 sm-padding">
                    <div class="widget-content">
                        <h4>Company</h4>
                        <ul class="widget-links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Clients Reviews</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="widget-content">
                        <h4>Headquaters</h4>
                        <p>962 Fifth Avenue, 3rd Floor New York, NY10022</p>
                        <span><a href="http://html.dynamiclayers.net/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="c880ada4a4a78889a4adb0a99ca0ada5ade6a6adbc">[email&#160;protected]</a></span>
                        <span>(+123) 456 789 101</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 sm-padding">
                    <div class="widget-content">
                        <h4>Newslatter Subscription</h4>
                        <p>Subscribe and get 10% off from our <br>architecture company.</p>
                        <div class="subscribe-box clearfix">
                            <div class="subscribe-form-wrap">
                                <form action="#" class="subscribe-form">
                                    <input type="email" name="email" id="subs-email" class="form-input"
                                        placeholder="Enter Your Email Address...">
                                    <button type="submit" class="submit-btn">Subscribe</button>
                                    <div id="subscribe-result">
                                        <p class="subscription-success"></p>
                                        <p class="subscription-error"></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
