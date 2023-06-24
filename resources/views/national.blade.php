@extends('layout')
@section('content')
    <div>.</div>
    <div class="roadmap-design">
        <h1 class="roadmap-text">राष्ट्रिय पहिचान पत्र (National Identity Card)</h1>
    </div>
    <div class="alert alert-success">
        <p class="display-title">Required documents:</p>
        <div class="display-list">
            <ul>
                <li>Application Form.</li>
                <li>Proof of Identity (citizenship certificate, passport, or voter ID card).</li>
                <li>Citizenship Certificate.</li>
                <li>Passport-sized Photographs.</li>
                <li>Fingerprints and Biometric Data.</li>
                <li>Fee.</li>
            </ul>
        </div>
    </div>
    <h2 class="center">Roadmap for National Identity Card</h2>
    <div class="show-roadmap">
        @foreach ($national as $national)
            <div class="show-roadmap-content">
                <div class="circle">{{ $national->id }}</div>
                <h3>Goto Room Number: {{ $national->roomNum }}</h3>
                <p>
                    {{ $national->description }}
                </p>
            </div>
        @endforeach
    </div>
@endsection
