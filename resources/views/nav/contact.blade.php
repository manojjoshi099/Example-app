<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- In <head> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @include('items.header');

</head>
<body>
    <!-- CONTACT US SECTION -->
    
    
    <section class="contact-us py-5" id="contact">
        <div class="container">
        <h2 class="text-center mb-4">Contact Us</h2>
        <form class="contact-form row g-3">
            <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="col-md-6">
            <input type="email" class="form-control" placeholder="Your Email" >
            </div>
            <div class="col-12">
            <input type="text" class="form-control" placeholder="Subject" >
            </div>
            <div class="col-12">
            <textarea class="form-control" rows="5" placeholder="Your Message" ></textarea>
            </div>
            <div class="col-12 text-center">
            <button type="submit" class="btn btn-custom px-4">Send Message</button>
            </div>
        </form>
        </div>
    </section>
    @include('items.footer')
    
</body>
</html>