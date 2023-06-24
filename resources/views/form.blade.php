@extends('layout')
@section('content')
    <div class="space">
        .
    </div>
    <form action="{{ route('form.store') }}" method="post" class="event-form">
        @csrf
        <p class="title">Register here</p>

        <div class="flex">
            <label>
                <input required="" placeholder="" type="text" class="input" name='firstName' />
                <span>Firstname</span>
            </label>

            <label>
                <input required="" placeholder="" type="text" class="input" name="lastName" />
                <span>Lastname</span>
            </label>
        </div>

        <label>
            <input placeholder="" type="email" class="input" name="email" />
            <span>Email(optional)</span>
        </label>
        <label>
            <input required="" placeholder="" type="number" class="input" name="phno" />
            <span>Ph-no</span>
        </label>
        <button class="submit">Submit</button>
    </form>
@endsection
