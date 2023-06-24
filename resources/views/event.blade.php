@extends('layout')
@section('content')
    <div class="notices">
        <h1>EVENTS</h1>
        @foreach ($events as $event)
            <div class="notice-container">
                <div class="content notice-title">
                    <h3>EVENT:</h3>
                    <input type="text" value="{{ $event->title }}" readonly>
                </div>
                <div class="content notice-excerpt">
                    <h3>DESCRIPTION:</h3>
                    <textarea readonly>{{ $event->description }}</textarea>
                </div>
                <div class="content notice-date">
                    <h3>POSTED_AT:</h3>
                    <input type="text" value="{{ $event->created_at }}" readonly />
                </div>
                <div class="content downlaod">
                    <button><a href="{{ Storage::url($event->file_url) }}" download>Downlaod notice</a></button>
                    <button><a href="{{ $event->event_link }}">Event Form</a></button>
                </div>
            </div>
        @endforeach

    </div>
@endsection
