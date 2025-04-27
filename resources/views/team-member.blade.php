@extends('layouts.app')

@section('title', $teamMember->name . ' | Tnila Construction')

@section('content')
    <!-- Page Banner -->
    <section class="page-header padding">
        <div class="container">
            <div class="page-content text-center">
                <h2>{{ $teamMember->name }}</h2>
                <p>{{ $teamMember->position }}</p>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('team') }}">Team</a></li>
                    <li class="active">{{ $teamMember->name }}</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Team Member Details Section -->
    <section class="team-details-section padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-details-image">
                        <img src="{{ asset($teamMember->image) }}" alt="{{ $teamMember->name }}" class="img-fluid box-shadow">
                        
                        @if($teamMember->hasSocialLinks())
                        <div class="social-links mt-4">
                            <h4>Connect with {{ $teamMember->name }}</h4>
                            <ul class="social-icons">
                                @if($teamMember->facebook_url)
                                <li><a href="{{ $teamMember->facebook_url }}" target="_blank"><i class="ti-facebook"></i></a></li>
                                @endif
                                @if($teamMember->twitter_url)
                                <li><a href="{{ $teamMember->twitter_url }}" target="_blank"><i class="ti-twitter"></i></a></li>
                                @endif
                                @if($teamMember->instagram_url)
                                <li><a href="{{ $teamMember->instagram_url }}" target="_blank"><i class="ti-instagram"></i></a></li>
                                @endif
                                @if($teamMember->linkedin_url)
                                <li><a href="{{ $teamMember->linkedin_url }}" target="_blank"><i class="ti-linkedin"></i></a></li>
                                @endif
                            </ul>
                        </div>
                        @endif
                        
                        @if($teamMember->email || $teamMember->phone)
                        <div class="contact-info mt-4">
                            <h4>Contact Information</h4>
                            <ul>
                                @if($teamMember->email)
                                <li><i class="ti-email"></i> <a href="mailto:{{ $teamMember->email }}">{{ $teamMember->email }}</a></li>
                                @endif
                                @if($teamMember->phone)
                                <li><i class="ti-mobile"></i> <a href="tel:{{ $teamMember->phone }}">{{ $teamMember->phone }}</a></li>
                                @endif
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="team-details-content">
                        <h2>{{ $teamMember->name }}</h2>
                        <h4>{{ $teamMember->position }}</h4>
                        <div class="divider"></div>
                        <div class="bio">
                            <h3>Biography</h3>
                            <p>{{ $teamMember->bio }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 