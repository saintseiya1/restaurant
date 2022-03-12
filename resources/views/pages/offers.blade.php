@extends('layouts.app')

@section('content')
<div id="offers-page">

    <div class="content-box">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1>Sign Up To Receive Deals</h1>

                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="firstnameinput" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstnameinput"
                                    name="fname" placeholder="John">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="lastnameinput" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastnameinput"
                                name="lname" placeholder="Doe">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="emailinput" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="emailinput"
                                name="email" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="phoneinput" class="form-label">Phone #</label>
                                <input type="email" class="form-control" id="phoneinput"
                                    name="phone" placeholder="718-298-5768">
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
