@extends('layout')
@section('content')
    <div>.</div>
    <div class="roadmap-design">
        <h1 class="roadmap-text">जन्म दर्ता (Birth Registration)</h1>
    </div>
    <div class="alert alert-success">
        <p class="display-title">Required documents:</p>
        <div class="display-list">
            <ul>
                <li>Birth Registration Application Form.</li>
                <li>Proof of Identity (citizenship certificates, passports, or identification documents) of the parent(s) or
                    legal guardian(s).</li>
                <li>Proof of Marriage (marriage certificate) of the parents (if applicable).</li>
                <li> Proof of Birth: Hospital or medical certificate, or a letter from the attending medical professional or
                    midwife verifying the birth.</li>
                <li> Witness: A witness with a valid identification document may be required to attest to the birth.</li>
                <li>Passport-sized photographs of the child.</li>
                <li>Fee: There may be a fee associated with the birth registration process, which should be paid.</li>
            </ul>
        </div>
    </div>
    <h2 class="center">Roadmap for Birth Registration</h2>
    <div class="show-roadmap">
        @foreach ($birth as $birth)
            <div class="show-roadmap-content">
                <div class="circle">{{ $birth->id }}</div>
                <h3>Goto Room Number: {{ $birth->roomNum }}</h3>
                <p>
                    {{ $birth->description }}
                </p>
            </div>
        @endforeach
    </div>
@endsection
