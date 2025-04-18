@extends('layouts.app')

@section('title', $project->name . ' | Tnila Construction')

@section('content')
    <!-- Page Banner -->
    <section class="page-header padding">
        <div class="container">
            <div class="page-content text-center">
                <h2>{{ $project->name }}</h2>
                <p>{{ $project->category }}</p>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('projects') }}">Projects</a></li>
                    <li class="active">{{ $project->name }}</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Project Details Section -->
    <section class="project-details-section padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="project-details-wrap">
                        <div class="project-details-thumb">
                            <img src="{{ $project->image ? asset($project->image) : asset('img/project-placeholder.jpg') }}" alt="{{ $project->name }}">
                        </div>
                        <div class="project-details-content">
                            <h2>{{ $project->name }}</h2>
                            <p>{!! nl2br(e($project->description)) !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project-sidebar">
                        <div class="project-info">
                            <h3>Project Information</h3>
                            <ul>
                                <li><span>Client:</span> {{ $project->client_name ?? 'N/A' }}</li>
                                <li><span>Location:</span> {{ $project->location }}</li>
                                <li><span>Area:</span> {{ $project->area ?? 'N/A' }}</li>
                                <li><span>Year:</span> {{ $project->project_year }}</li>
                                <li><span>Status:</span> {{ ucfirst(str_replace('_', ' ', $project->status)) }}</li>
                                <li><span>Architects:</span> {{ $project->architects ?? 'N/A' }}</li>
                                <li><span>Project Manager:</span> {{ $project->project_manager ?? 'N/A' }}</li>
                                <li><span>Duration:</span> {{ $project->duration ? $project->duration . ' months' : 'N/A' }}</li>
                                @if($project->budget)
                                    <li><span>Budget:</span> ${{ number_format($project->budget, 2) }}</li>
                                @endif
                            </ul>
                        </div>
                        <div class="project-share">
                            <h3>Share This Project</h3>
                            <ul class="social-share">
                                <li><a href="https://facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank"><i class="ti-facebook"></i></a></li>
                                <li><a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($project->name) }}" target="_blank"><i class="ti-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->fullUrl()) }}&title={{ urlencode($project->name) }}" target="_blank"><i class="ti-linkedin"></i></a></li>
                                <li><a href="https://pinterest.com/pin/create/button/?url={{ urlencode(request()->fullUrl()) }}&media={{ urlencode(asset($project->image)) }}&description={{ urlencode($project->name) }}" target="_blank"><i class="ti-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Projects Section -->
    <section class="projects-section bg-grey padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <span>Portfolio</span>
                <h2>Related Projects</h2>
            </div>
            <div class="row">
                @php
                    $relatedProjects = \App\Models\Project::where('category', $project->category)
                        ->where('id', '!=', $project->id)
                        ->take(3)
                        ->get();
                @endphp
                
                @if($relatedProjects->count() > 0)
                    @foreach($relatedProjects as $relatedProject)
                        <div class="col-lg-4 col-sm-6 padding-15">
                            <div class="project-item">
                                <img src="{{ $relatedProject->image ? asset($relatedProject->image) : asset('img/project-placeholder.jpg') }}" alt="{{ $relatedProject->name }}">
                                <div class="overlay"></div>
                                <a href="{{ asset($relatedProject->image ?? 'img/project-placeholder.jpg') }}" class="view-icon img-popup" data-gall="project">
                                    <i class="fas fa-expand"></i>
                                </a>
                                <div class="projects-content">
                                    <a href="#" class="category">{{ $relatedProject->category }}</a>
                                    <h3><a href="{{ route('projects.show', $relatedProject->slug) }}" class="tittle">{{ $relatedProject->name }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center">
                        <p>No related projects found.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
