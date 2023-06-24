@extends('layout')
@section('content')
    <div>.</div>
    <div class="roadmap-design">
        <h1 class="roadmap-text">विवाह दर्ता (Marriage Registration)</h1>
    </div>
    <div class="alert alert-success">
        <p class="display-title">Required documents:</p>
        <div class="display-list">
            <ul>
                <li>Marriage Registration Application Form.</li>
                <li>Proof of Identity (citizenship certificates, passports, or voter ID cards) for both partners.</li>
                <li>Proof of Age (birth certificates or other age verification documents) for both partners.</li>
                <li>Affidavit of Eligibility.</li>
                <li>Marriage Certificate (original) issued by the relevant authority.</li>
                <li>Passport-sized photographs of both partners.</li>
                <li>Two witnesses with valid identification documents.</li>
                <li>Marriage registration fee.</li>
            </ul>
        </div>
    </div>
    <h2 class="center">Roadmap for Marriage Registration</h2>
    <div class="show-roadmap">
        @foreach ($marriage as $marriage)
            <div class="show-roadmap-content">
                <div class="circle">{{ $marriage->id }}</div>
                <h3>Goto Room Number: {{ $marriage->roomNum }}</h3>
                <p>
                    {{ $marriage->description }}
                </p>
            </div>
        @endforeach
    </div>
@endsection
