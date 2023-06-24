@extends('layout')
@section('content')
    <div>.</div>
    <div class="roadmap-design">
        <h1 class="roadmap-text">मृत्यु दर्ता (Death Registration)</h1>
    </div>
    <div class="alert alert-success">
        <p class="display-title">Required documents:</p>
        <div class="display-list">
            <ul>
                <li>Death Registration Application Form.</li>
                <li>Death Certificate issued by the relevant authority.</li>
                <li>Proof of Identity (citizenship certificates, passports, or identification documents) of the deceased.
                </li>
                <li>Proof of Relationship (citizenship certificates, birth certificates, etc.) with the person registering
                    the
                    death.</li>
                <li>Medical Certificate stating the cause of death.</li>
                <li>Post-mortem Report (if applicable).</li>
                <li>Passport-sized photographs of the deceased.</li>
                <li>Witness with a valid identification document.</li>
                <li>Death registration fee.</li>
            </ul>
        </div>
    </div>
    <h2 class="center">Roadmap for Death Registration</h2>
    <div class="show-roadmap">
        @foreach ($death as $death)
            <div class="show-roadmap-content">
                <div class="circle">{{ $death->id }}</div>
                <h3>Goto Room Number: {{ $death->roomNum }}</h3>
                <p>
                    {{ $death->description }}
                </p>
            </div>
        @endforeach
    </div>
@endsection
