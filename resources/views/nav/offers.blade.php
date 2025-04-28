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
    <style>
        .menu-item {
            border-radius: 15px;
            transition: transform 0.3s;
            height: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .menu-item:hover {
            transform: translateY(-5px);
        }

        .menu-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }

        .menu-item-content {
            padding: 1.5rem;
        }

        .price {
            color: #dc3545;
            font-weight: 700;
            font-size: 1.25rem;
        }

        .price-discounted {
            color: #28a745;
            font-weight: 700;
        }

        .offer-box {
            border: 2px solid #ffc107;
            border-radius: 15px;
            overflow: hidden;
            position: relative;
        }

        .offer-badge {
            position: absolute;
            top: 10px;
            right: -30px;
            background: #dc3545;
            color: white;
            padding: 0.25rem 2rem;
            transform: rotate(45deg);
            font-size: 0.875rem;
        }

        .category-header {
            border-left: 5px solid #dc3545;
            padding-left: 1rem;
            margin: 2rem 0;
        }
    </style>
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
    {{-- <section class="offers container py-5">
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
    </section> --}}

    <section class="offers container py-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="offer-box">
                    <span class="offer-badge">25% OFF</span>
                    <img src="images/family combo.png" class="w-100" alt="Family Combo">
                    <div class="p-3">
                        <h3>Family Combo</h3>
                        <p class="text-muted">4 Burgers, 2 Fries, 4 Soft Drinks</p>
                        <div class="d-flex align-items-center gap-2">
                            <span class="price-discounted">$25.99</span>
                            <del class="text-muted small">$32.99</del>
                        </div>
                        <button class="btn btn-warning w-100 mt-3">Claim Offer</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="offer-box">
                    <span class="offer-badge">27% OFF</span>
                    <img src="images/snack attack.png" class="w-100" alt="Snack Attack">
                    <div class="p-3">
                        <h3>Snack Attack</h3>
                        <p class="text-muted">Fries, Nuggets & Cold Drink</p>
                        <div class="d-flex align-items-center gap-2">
                            <span class="price-discounted">$10.99</span>
                            <del class="text-muted small">$7.99</del>
                        </div>
                        <button class="btn btn-warning w-100 mt-3">Claim Offer</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="offer-box">
                    <span class="offer-badge">44% OFF</span>
                    <img class="w-100" src="images/bogo burger.png" alt="BOGO Burger">
                    <div class="p-3">
                        <h3>BOGO Burger</h3>
                        <p class="text-muted">Buy 1 Get 1 Free - This Week Only</p>
                        <div class="d-flex align-items-center gap-2">
                            <span class="price-discounted">$17.98</span>
                            <del class="text-muted small">$9.99</del>
                        </div>
                        <button class="btn btn-warning w-100 mt-3">Claim Offer</button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    @include('items.footer')


    

</body>

</html>