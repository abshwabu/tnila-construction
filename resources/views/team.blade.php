@extends('layouts.app')

@section('title', 'Our Team | Tnila Construction')

@section('content')
    <!-- Page Banner -->
    <section class="page-header padding">
        <div class="container">
            <div class="page-content text-center">
                <h2>Our Team</h2>
                <p>Meet the professionals behind our successful projects.</p>
            </div>
        </div>
    </section>

    @if($teamMembers->count() > 0)
    <!-- Team Section -->
    <section class="team-section padding">
        <div class="container">
            <div class="row">
                @foreach($teamMembers as $member)
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="team-item box-shadow">
                        <div class="team-thumb">
                            <img src="{{ asset($member->image) }}" alt="{{ $member->name }}">
                            <div class="team-overlay">
                                <ul class="team-social">
                                    @if($member->facebook_url)
                                    <li><a href="{{ $member->facebook_url }}" target="_blank"><i class="ti-facebook"></i></a></li>
                                    @endif
                                    @if($member->twitter_url)
                                    <li><a href="{{ $member->twitter_url }}" target="_blank"><i class="ti-twitter"></i></a></li>
                                    @endif
                                    @if($member->instagram_url)
                                    <li><a href="{{ $member->instagram_url }}" target="_blank"><i class="ti-instagram"></i></a></li>
                                    @endif
                                    @if($member->linkedin_url)
                                    <li><a href="{{ $member->linkedin_url }}" target="_blank"><i class="ti-linkedin"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>{{ $member->name }}</h3>
                            <span>{{ $member->position }}</span>
                            <p>{{ Str::limit($member->bio, 100) }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @else
    <!-- No Team Members Message -->
    <section class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="alert alert-info">
                        <h4>Team Information Coming Soon</h4>
                        <p>We're currently updating our team information. Please check back soon!</p>
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