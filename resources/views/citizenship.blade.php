@extends('layout')
@section('content')
    <div>.</div>
    <div class="roadmap-design">
        <h1 class="roadmap-text">नागरिकता दर्ता (Citizenship Registration)</h1>
    </div>
    <div class="alert alert-success">
        <p class="display-title">Required documents:</p>
        <div class="display-list">
            <ul>
                <li>Citizenship Application Form.</li>
                <li>Proof of Identity (citizenship certificate, passport, or voter ID card).</li>
                <li>Proof of Residence (utility bills, bank statements, or rental agreement).</li>
                <li>Birth Certificate.</li>
                <li>Citizenship of Parents (if applicable).</li>
                <li>Marriage Certificate (if applicable).</li>
                <li>Citizenship Fee.</li>
            </ul>
        </div>
    </div>
    <h2 class="center">Roadmap for Citizenship Registration</h2>
    <div class="show-roadmap">
        @foreach ($citizenship as $citizen)
            <div class="show-roadmap-content">
                <div class="circle">{{ $citizen->id }}</div>
                <h3>Goto Room Number: {{ $citizen->roomNum }}</h3>
                <p>
                    {{ $citizen->description }}
                </p>
            </div>
        @endforeach
    </div>
@endsection
