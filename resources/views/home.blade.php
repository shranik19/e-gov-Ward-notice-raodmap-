@extends('layout')

@section('content')
    <!--banner start -->
    <div class="banner-main">
        <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="titlepage-h1">
                            <h1 class="bnner_title">
                                <span style="color: #142a33"></span>
                            </h1>
                            <p class="long_text"></p>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--banner end -->
    <!--services start -->
    <div class="services_main">
        <div class="container">
            <div class="creative_taital">
                <h1 class="creative_text">Ward Notice Application</h1>
                <p style="color: #050000; text-align: center;">In this application, we post about the notices and events
                    that are taking place in the ward. It is a place where every citizens can know what is going on in the
                    Ward. We post daily notices and events only when taking place.</p>

            </div>


            {{-- =====home contetn=========== --}}
            <div class="about-content">
                <div>
                    <h3>Map</h3>
                    <img class="about-map" src="./images/map.jpg" alt="">
                </div>
                <div>
                    <h3>Elected Members</h3>
                    <div class="elected">
                        <div class="elected-wrap">
                            <img class="elected-image" src="/images/dummy.jpg" alt="">
                            <div class="members">
                                <h5>abc maharjan</h5>
                                <p>वडा अध्यक्ष</p>
                            </div>
                        </div>
                        <div class="elected-wrap">
                            <img class="elected-image" src="/images/dummy.jpg" alt="">
                            <div class="members">
                                <h5>abc sangat</h5>
                                <p>वडा सदस्य</p>
                            </div>
                        </div>
                        <div class="elected-wrap">
                            <img class="elected-image" src="/images/dummy.jpg" alt="">
                            <div class="members">
                                <h5>abc sangat</h5>
                                <p>वडा सदस्य</p>
                            </div>
                        </div>
                        <div class="elected-wrap">
                            <img class="elected-image" src="/images/dummy.jpg" alt="">
                            <div class="members">
                                <h5>abc sangat</h5>
                                <p>वडा सदस्य</p>
                            </div>
                        </div>
                        <div class="elected-wrap">
                            <img class="elected-image" src="/images/dummy.jpg" alt="">
                            <div class="members">
                                <h5>abc sangat</h5>
                                <p>वडा सदस्य</p>
                            </div>
                        </div>
                        <div class="elected-wrap">
                            <img class="elected-image" src="/images/dummy.jpg" alt="">
                            <div class="members">
                                <h5>abc sangat</h5>
                                <p>वडा सदस्य</p>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
        <!--touch_section start -->

        <div class="touch_section">
            <div class="container">
                <h1 class="touch_text">Send us an Email</h1>
            </div>
        </div>

        <div class="lets_touch_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input_main">
                            <div class="container">
                                <form action="/action_page.php">
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Name" name="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Email" name="Email">
                                    </div>
                                    <form action="/action_page.php">
                                        <div class="form-group">
                                            <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="text"></textarea>
                                        </div>
                                    </form>
                                </form>
                            </div>
                            <div class="send_btn">
                                <button type="button" class="main_bt"><a href="#">Send</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <p class="lorem_text">If you dislike any content or have any thoughts about this
                                    application, You can mail us here!! </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
