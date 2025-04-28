<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @include('items.header')

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
    <!-- FAST FOOD MENU -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Fast Food Menu</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="menu-item">
                        <img src="images/Classic Cheese Burger.png" alt="Classic Cheese Burger">
                        <div class="menu-item-content">
                            <h5 class="fw-bold mb-2">Classic Cheese Burger</h5>
                            <p class="text-muted small mb-3">Juicy patty with melted cheese and fresh veggies</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">$8.99</span>
                                <button class="btn btn-danger btn-sm">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="menu-item">
                        <img src="images/Classic Cheese Burger.png" alt="Classic Cheese Burger">
                        <div class="menu-item-content">
                            <h5 class="fw-bold mb-2">Classic Cheese Burger</h5>
                            <p class="text-muted small mb-3">Juicy patty with melted cheese and fresh veggies</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">$8.99</span>
                                <button class="btn btn-danger btn-sm">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="menu-item">
                        <img src="images/Margherita Pizza.png" alt="Margherita Pizza">
                        <h5>Margherita Pizza</h5>
                        <p>Fresh sauce and mozzarella cheese.</p>
                        <span class="price-discounted">$10.99</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="menu-item">
                        <img src="images/Grilled Chicken Sandwich.png" alt="Grilled Chicken Sandwich">
                        <h5>Grilled Chicken Sandwich</h5>
                        <p>With lettuce and mayo goodness.</p>
                        <span class="price-discounted">$7.50</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="menu-item">
                        <img src="images/Crispy Fries.png" alt="Crispy Fries">
                        <h5>Crispy Fries</h5>
                        <p>Golden, crispy & seasoned.</p>
                        <span class="price-discounted">$3.99</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="menu-hero text-center py-5 bg-light">
        <div class="container">
            <h1>🍽️ Explore Our Delicious Menu</h1>
            <p class="subtitle">Authentic taste crafted with passion.</p>
        </div>
    </section>

    <!-- MENU CATEGORIES -->
    <div class="container py-5">
        <!-- Starters -->
        <h2 class="mb-4">Starters</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/garlic-bread.jpg" alt="Garlic Bread">
                    <div class="menu-item-content">
                        <h4 class="fw-bold">Garlic Bread</h4>
                        <p class="text-muted">Crispy bread with garlic & herbs</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$4.99</span>
                            <button class="btn btn-danger btn-sm">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Course -->
        <h2 class="mt-5 mb-4">Main Course</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/grilled-chicken.jpg" alt="Grilled Chicken">
                    <h4>Grilled Chicken</h4>
                    <p>Served with veggies and mashed potatoes.</p>
                    <span class="price">$13.99</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/pasta.jpg" alt="Pasta Alfredo">
                    <h4>Pasta Alfredo</h4>
                    <p>Classic creamy white sauce pasta.</p>
                    <span class="price">$11.49</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/pasta.jpg" alt="Pasta Alfredo">
                    <h4>Pasta Alfredo</h4>
                    <p>Classic creamy white sauce pasta.</p>
                    <span class="price">$11.49</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/pasta.jpg" alt="Pasta Alfredo">
                    <h4>Pasta Alfredo</h4>
                    <p>Classic creamy white sauce pasta.</p>
                    <span class="price">$11.49</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/pasta.jpg" alt="Pasta Alfredo">
                    <h4>Pasta Alfredo</h4>
                    <p>Classic creamy white sauce pasta.</p>
                    <span class="price">$11.49</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/pasta.jpg" alt="Pasta Alfredo">
                    <h4>Pasta Alfredo</h4>
                    <p>Classic creamy white sauce pasta.</p>
                    <span class="price">$11.49</span>
                </div>
            </div>
        </div>

        <!-- Pizzas -->
        <h2 class="mt-5 mb-4">Pizzas</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/pepperoni-pizza.jpg" alt="Pepperoni Pizza">
                    <h4>Pepperoni Pizza</h4>
                    <p>Loaded with cheese and pepperoni.</p>
                    <span class="price">$12.99</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/veg-pizza.jpg" alt="Veggie Pizza">
                    <h4>Veggie Delight</h4>
                    <p>Fresh veggies on a cheesy crust.</p>
                    <span class="price">$10.99</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/veg-pizza.jpg" alt="Veggie Pizza">
                    <h4>Veggie Delight</h4>
                    <p>Fresh veggies on a cheesy crust.</p>
                    <span class="price">$10.99</span>
                </div>
            </div>
        </div>

        <!-- Burgers -->
        <h2 class="mt-5 mb-4">Burgers</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/beef-burger.jpg" alt="Beef Burger">
                    <h4>Beef Burger</h4>
                    <p>Juicy beef patty with melted cheese.</p>
                    <span class="price">$9.49</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/chicken-burger.jpg" alt="Chicken Burger">
                    <h4>Chicken Burger</h4>
                    <p>Crispy chicken with fresh lettuce.</p>
                    <span class="price">$8.99</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/chicken-burger.jpg" alt="Chicken Burger">
                    <h4>Chicken Burger</h4>
                    <p>Crispy chicken with fresh lettuce.</p>
                    <span class="price">$8.99</span>
                </div>
            </div>
        </div>

        <!-- Drinks -->
        <h2 class="mt-5 mb-4">Drinks</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/coke.jpg" alt="Coke">
                    <h4>Chilled Coke</h4>
                    <p>Refreshing and fizzy drink.</p>
                    <span class="price">$1.99</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/mango-shake.jpg" alt="Mango Shake">
                    <h4>Mango Shake</h4>
                    <p>Fresh mango blended with cream.</p>
                    <span class="price">$3.99</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/mango-shake.jpg" alt="Mango Shake">
                    <h4>Mango Shake</h4>
                    <p>Fresh mango blended with cream.</p>
                    <span class="price">$3.99</span>
                </div>
            </div>
        </div>

        <!-- Desserts -->
        <h2 class="mt-5 mb-4">Desserts</h2>
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/cheesecake.jpg" alt="Cheesecake">
                    <h4>Cheesecake</h4>
                    <p>Creamy and rich New York-style.</p>
                    <span class="price">$6.99</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/brownie.jpg" alt="Brownie">
                    <h4>Chocolate Brownie</h4>
                    <p>Served with vanilla ice cream.</p>
                    <span class="price">$5.49</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/brownie.jpg" alt="Brownie">
                    <h4>Chocolate Brownie</h4>
                    <p>Served with vanilla ice cream.</p>
                    <span class="price">$5.49</span>
                </div>
            </div>
        </div>
    </div>

    <!-- OFFERS SECTION -->
    <section class="offer-hero text-center bg-light py-4">
        <div class="container">
            <h1>🔥 Exclusive Deals & Combos</h1>
            <p>Limited time offers you just can’t miss!</p>
        </div>
    </section>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
