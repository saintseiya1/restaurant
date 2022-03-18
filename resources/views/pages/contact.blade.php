@extends('layouts.app')

@section('title')
About - {{ $settings['general']->site_title }}  
@endsection

@section('description')
Billys Burgers have been around since the beginning of time.
@endsection

@section('content')
    <div id="contact-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>Contact Page</h1>
                    <h3>Address</h3>
                    <p>
                        {{ $settings['general']->address_1}} {{ $settings['general']->address_2}},<br>
                        {{ $settings['general']->city}}, {{ $settings['general']->state}}
                        {{ $settings['general']->zipcode}}
                    </p>

                    <h3>Phone Number</h3>
                        <a href="tel:{{ $settings['general']->phone_number}}">
                            {{ $settings['general']->phone_number}}
                        </a>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.183238525444!2d-118.03897078531469!3d33.85916823532841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd2c6936cdc4dd%3A0x1c1da5b2781d664d!2sBurger%20King!5e0!3m2!1sen!2sus!4v1647559259332!5m2!1sen!2sus" 
                    width="600" height="450" style="border:0;" allowfullscreen="" 
                    loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
