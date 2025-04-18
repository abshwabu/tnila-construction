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
    
@endsection
