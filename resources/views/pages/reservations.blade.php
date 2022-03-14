@extends('layouts.app')

@section('content')
    <div id="waitlist-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>Get On the list</h1>

                    <form>
                        <div class="mb-3">
                            <label for="firstnameinput" class="form-label">First Name</label>
                            <input type="email" class="form-control" id="firstnameinput"
                                name="fname" placeholder="John">
                        </div>
                        <div class="mb-3">
                            <label for="lastnameinput" class="form-label">Last Name</label>
                            <input type="email" class="form-control" id="lastnameinput"
                                name="lname" placeholder="Doe">
                        </div>

                        <div class="mb-3">
                          <label for="emailinput" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="emailinput"
                            name="email" placeholder="name@example.com">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="phoneinput" class="form-label">Phone #</label>
                            <input type="email" class="form-control" id="phoneinput"
                                name="phone" placeholder="718-298-5768">
                        </div>
                        <div class="mb-3">
                          <label for="guestsinput" class="form-label">How Many Guest</label>
                          <select class="form-control" id="guestsinput" name="guests">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                        </div>
                        <div class="mb-3">
                            <label for="timeinput" class="form-label">What Time?</label>
                            <select class="form-control" id="timeinput" name="time">
                              <option value="6">6:00 PM</option>
                              <option value="7">7:00 PM</option>
                              <option value="8">8:00 PM</option>
                              <option value="9">9:00 PM</option>
                              <option value="10">10:00 PM</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                      </form>
                </div>
                <div class="col-md-6">
                    <p>Please Note: this not a reservation. You will be added to the current wait
                        list. You may have a short wait once you arrive while we prepare your table.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
