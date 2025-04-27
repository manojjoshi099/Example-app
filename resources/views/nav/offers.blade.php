<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Special Offers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="mt-5">

    <!-- Include header here if modular -->
    @include('items.header')

    <!-- OFFERS HERO SECTION -->
    <!-- OFFERS HERO -->
    <section class="offer-hero text-center py-5 bg-light">
        <div class="container">
            <h1 class="display-5 fw-bold">🔥 Exclusive Deals & Combos</h1>
            <p class="subtitle text-muted">Limited time offers you just can’t miss!</p>
        </div>
    </section>

    <!-- OFFERS SECTION -->
    <section class="offers container py-5">
        <div class="row g-4">

            <!-- Offer 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="offer-box h-100 p-4 shadow rounded d-flex flex-column justify-content-between">
                    <span class="badge bg-danger mb-2">Hot Deal</span>
                    <img src="images/family combo.png" class="img-fluid rounded mb-3" alt="Family Combo">
                    <h3>Family Combo</h3>
                    <p>4 Burgers, 2 Large Fries, and 4 Soft Drinks.</p>
                    <div class="price-box mb-3">
                        <del class="text-muted">$32.99</del>
                        <span class="text-success fw-bold ms-2">-21%</span><br>
                        <span class="price fw-bold fs-5 text-danger">$25.99</span>
                    </div>
                    <a href="#" class="btn btn-custom w-100 mt-auto">Grab Deal</a>
                </div>
            </div>

            <!-- Offer 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="offer-box h-100 p-4 shadow rounded d-flex flex-column justify-content-between">
                    <span class="badge bg-warning text-dark mb-2">Quick Bite</span>
                    <img src="images/snack attack.png" class="img-fluid rounded mb-3" alt="Snack Deal">
                    <h3>Snack Attack</h3>
                    <p>Fries, Nuggets & Cold Drink. Perfect for a quick bite!</p>
                    <div class="price-box mb-3">
                        <del class="text-muted">$10.99</del>
                        <span class="text-success fw-bold ms-2">-27%</span><br>
                        <span class="price fw-bold fs-5 text-danger">$7.99</span>
                    </div>
                    <a href="#" class="btn btn-custom w-100 mt-auto">Order Now</a>
                </div>
            </div>

            <!-- Offer 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="offer-box h-100 p-4 shadow rounded d-flex flex-column justify-content-between">
                    <span class="badge bg-success mb-2">BOGO</span>
                    <img src="images/bogo burger.png" class="img-fluid rounded mb-3" alt="BOGO Burger">
                    <h3>BOGO Burger</h3>
                    <p>Buy 1 Get 1 Free on Cheese Burgers. Only this week!</p>
                    <div class="price-box mb-3">
                        <del class="text-muted">$18.99</del>
                        <span class="text-success fw-bold ms-2">-47%</span><br>
                        <span class="price fw-bold fs-5 text-danger">$9.99</span>
                    </div>
                    <a href="#" class="btn btn-custom w-100 mt-auto">Get It Now</a>
                </div>
            </div>

        </div>
    </section>


    <!-- Footer -->
    @include('items.footer')


    

</body>

</html>