@extends('layout')
@section('content')
    <div class="section_service_2">
        <h1 class="service_text">Our Roadmaps</h1>
    </div>
    <div class="service_main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="written_text">
                        <h1 class="written_text">About</h1>
                        <p>
                            Our carefully crafted roadmap provides a clear and
                            straightforward guide for individuals seeking to process their
                            documents within a ward. This roadmap takes into account the
                            layout and organization of the ward, ensuring a seamless
                            journey. Starting with a comprehensive list of required
                            documents, individuals can quickly determine the specific rooms
                            or areas they need to visit. The roadmap outlines the optimal
                            sequence of rooms, ensuring an efficient flow and minimizing
                            unnecessary backtracking. Each room is clearly marked with its
                            purpose and the types of documents processed there. This roadmap
                            not only saves time and effort but also reduces confusion,
                            empowering individuals to navigate the ward with confidence and
                            ease. With this roadmap in hand, individuals can swiftly move
                            from one room to another, processing their documents
                            hassle-free.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="roadmap">
        <div class="r-title">
            <p>Roadmaps for:</p>
        </div>
        <div class="r-container">
            <div class="r-content">
                <button><a href="/citizenship">नागरिकता दर्ता (Citizenship Registration)</a></button>
            </div>
            <div class="r-content">
                <button><a href="/marriage">विवाह दर्ता (Marriage Registration)</a></button>
            </div>
            <div class="r-content">
                <button><a href="/death">मृत्यु दर्ता (Death Registration)</a></button>
            </div>
            <div class="r-content">
                <button><a href="/birth">जन्म दर्ता (Birth Registration)</a></button>
            </div>
            <div class="r-content">
                <button><a href="/national">राष्ट्रिय पहिचान पत्र (National Identity Card)</a></button>
            </div>
        </div>
    </section>
@endsection
