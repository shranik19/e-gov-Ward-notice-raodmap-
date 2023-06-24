@extends('layout')
@section('content')
    <div class="notices">
        <h1>NOTICES</h1>
        @foreach ($notices as $notice)
            <div class="notice-container">
                <div class="content notice-title">
                    <h3>NOTICE:</h3>
                    <input type="text" value="{{ $notice->title }}" readonly>
                </div>
                <div class="content notice-excerpt">
                    <h3>DESCRIPTION:</h3>
                    <textarea readonly>{{ $notice->description }}</textarea>
                </div>
                <div class="content notice-date">
                    <h3>POSTED_AT:</h3>
                    <input type="text" value="{{ $notice->created_at }}" readonly />
                </div>
                <div class="content downlaod">
                    <button><a href="{{ Storage::url($notice->file_url) }}" download>Downlaod notice</a></button>
                </div>
            </div>
        @endforeach

    </div>
@endsection
