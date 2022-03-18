@extends('layouts.app')

@section('title')
Offers - {{ $settings['general']->site_title }} 
@endsection

@section('content')
<div id="offers-page">

    <div class="content-box">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1>Sign Up To Receive Deals</h1>

                <form method="POST" action="/offers">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="inputfname" class="form-label">First Name</label>
                                <input id="inputfname" type="text"
                                class="form-control form-control-lg @error('fname') is-invalid @enderror"
                                name="fname" value="{{ old('fname') }}" required
                                autocomplete="fname" placeholder="John" autofocus>

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="inputlname" class="form-label">Last Name</label>
                                <input id="inputlname" type="text"
                                class="form-control form-control-lg @error('lname') is-invalid @enderror"
                                name="lname" value="{{ old('lname') }}" required
                                autocomplete="lname" placeholder="Doe" autofocus>

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="inputemail" class="form-label">Email address</label>
                                <input id="inputemail" type="email"
                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required
                                autocomplete="email" placeholder="john@gmail.com" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="inputphone" class="form-label">Phone #</label>
                                <input id="inputphone" type="tel"
                                class="form-control form-control-lg @error('phone_number') is-invalid @enderror"
                                name="phone_number" value="{{ old('phone_number') }}" required
                                autocomplete="phone_number" placeholder="2345678901" autofocus>

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <p>In signing up I acknowledge that I am 18 years of age or older, want
                                    to receive email offers from Billys Burgers and, I I select to join
                                    Dine Rewards, agree to the terms and conditions of the program.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
