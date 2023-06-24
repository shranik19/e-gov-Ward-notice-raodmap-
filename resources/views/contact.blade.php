@extends('layout')
@section('content')
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
                            <form onsubmit="send();reset;return false">
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Name" name="Name" id="name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Email" name="Email" id="email"
                                        required>
                                </div>

                                <div class="form-group">
                                    <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="text" id="message" required></textarea>
                                </div>
                                <button type="submit" class="main_bt">Send</button>

                            </form>
                        </div>
                        <div class="send_btn">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <p class="lorem_text">If you dislike any content or have any thoughts about this application,
                                You can mail us here!! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function send() {
            Email.send({
                Host: "smtp.gmail.com",
                Username: "shraniksangat9@gmail.com",
                Password: "",
                To: 'shraniksangat@gmail.com',
                From: document.getElementById("email").value,
                Subject: "wna",
                Body: document.getElementById("message").value
            }).then(
                message => alert('email send successful')
            );
        }
    </script>
@endsection
