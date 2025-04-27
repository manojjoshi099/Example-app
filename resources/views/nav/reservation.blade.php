<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- In <head> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @include('items.header');
</head>
<body class="mt-5">
    <!-- HERO SECTION -->
    <section class="reservation-hero text-center py-5">
        <div class="container">
            <h1 class="display-5 fw-bold text-black">Reserve Your Table</h1>
            <p class="lead text-black">Make a reservation and enjoy your meal without the wait!</p>
        </div>
    </section>

    <!-- RESERVATION FORM SECTION -->
<section class="reservation-section py-5">
    <div class="container">
        {{-- <h2 class="text-center mb-4">Reserve Your Table</h2>
        <p class="text-center mb-5">Plan ahead and avoid the wait. Book your table now!</p> --}}

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
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-custom px-5">Book Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT INFO SECTION -->
<section class="contact-info-section py-5 bg-light">
    <div class="container">
        <h3 class="text-center mb-4">Contact & Location</h3>
        <div class="row text-center">
            <div class="col-md-4">
                <h5>📍 Location</h5>
                <p>Dhangadhi, Nepal</p>
            </div>
            <div class="col-md-4">
                <h5>📞 Call Us</h5>
                <p>+977 1234567890</p>
            </div>
            <div class="col-md-4">
                <h5>📧 Email</h5>
                <p>info@gmail.com</p>
            </div>
        </div>
    </div>
</section>

<!-- GOOGLE MAP SECTION -->
    <div class="container mb-4">
        <div style="max-width: 1200px; height: 250px; overflow: hidden;">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111993.84322423609!2d80.52364325689933!3d28.69540144264237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a1ed0ffb42cc37%3A0x7fe89470a724b11c!2z4KSn4KSo4KSX4KSi4KWA!5e0!3m2!1sne!2snp!4v1744695644104!5m2!1sne!2snp" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        </div>
    </div>  

<!-- OPENING HOURS SECTION -->
<section class="opening-hours py-5 text-center bg-white">
    <div class="container">
        <h3 class="mb-3">🕒 Opening Hours</h3>
        <p>Sunday – Friday: <strong>10:00 AM - 10:00 PM</strong></p>
    </div>
</section>

<!-- FAQ SECTION -->
<section class="faq-section py-5 bg-light">
    <div class="container">
        <h3 class="text-center mb-4">Frequently Asked Questions</h3>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                        Can I cancel my reservation?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        Yes, you can cancel or reschedule your reservation at least 1 hour before the reserved time.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faq2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                        Is online reservation free?
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Yes, it's completely free to book your table online.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- FOOTER SECTION -->
        @include('items.footer')
</body>
</html>