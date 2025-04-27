@extends('layouts.sidebar')
@section('content')

<div>
    <section class="reservation-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">Reservation Form</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form class="reservation-form p-4 shadow rounded bg-white" id="reservation-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" id="name" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="date" class="form-label">Reservation Date</label>
                                <input type="date" id="date" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="time" class="form-label">Reservation Time</label>
                                <input type="time" id="time" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="guests" class="form-label">Guests</label>
                                <input type="number" id="guests" class="form-control" placeholder="Eg. 4" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" id="phone" class="form-control" required>
                            </div>
                            <div class="col-12">
                                <label for="notes" class="form-label">Special Requests (Optional)</label>
                                <textarea id="notes" class="form-control" rows="3"></textarea>
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit Reservation</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection