@extends('template.template')

@section('content')

<div class="container mt-5">

    <div class="col-lg-6 mt-4 mt-md-0">

        <form action="{{ route('mail') }}" method="POST">

        @csrf

        <div class="row">

            <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>

            <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>

        </div>

        <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>

        <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>

        <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>

        <div class="text-center"><button type="submit">Send Message</button></div>

        </form>

    </div>

</div>

@endsection