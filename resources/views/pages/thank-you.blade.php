@extends('layouts.app')

@section('title')
Thank you!{{ $settings['general']->site_title }}  
@endsection

@section('content')
<div id="offers-page">

    <div class="content-box">
        <div class="row">
            <div class="col-md-10 offset-md-1 thank-you">
                <h1>Thank You</h1>
                <p>We will get back to you.</p>
            </div>
        </div>
    </div>
</div>
@endsection
