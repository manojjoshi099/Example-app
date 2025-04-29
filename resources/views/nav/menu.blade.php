<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @include('items.header')
    <style>
        /* Image Container */
        .image-container {
            position: relative;
            width: 100%;
            padding-top: 75%; /* 4:3 Aspect Ratio */
            overflow: hidden;
            border-radius: 15px 15px 0 0;
        }

        .image-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Menu Item Card */
        .menu-item {
            border-radius: 15px;
            transition: transform 0.3s;
            height: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }

        .menu-item:hover {
            transform: translateY(-5px);
        }

        .menu-item-content {
            padding: 1.5rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* Pricing */
        .price {
            color: #dc3545;
            font-weight: 700;
            font-size: 1.25rem;
            margin-top: auto;
        }

        /* Offers Section */
        .offer-box {
            border: 2px solid #ffc107;
            border-radius: 15px;
            overflow: hidden;
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
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
            z-index: 3;
        }

        /* Category Headers */
        .category-header {
            border-left: 5px solid #dc3545;
            padding-left: 1rem;
            margin: 2rem 0;
        }

        /* Buttons */
        .btn-cart {
            background: #dc3545;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            transition: all 0.3s;
        }

        .btn-cart:hover {
            transform: scale(1.05);
            box-shadow: 0 3px 10px rgba(220, 53, 69, 0.4);
        }
    </style>
</head>

<body class="mt-5">
    <!-- Main Menu -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Fast Food Menu</h2>
            <div class="row g-4">
                <!-- Burger -->
                <div class="col-md-6 col-lg-3">
                    <div class="menu-item">
                        <div class="image-container">
                            <img src="images/Classic Cheese Burger.png" alt="Burger">
                        </div>
                        <div class="menu-item-content">
                            <h5 class="fw-bold mb-2">Classic Cheese Burger</h5>
                            <p class="text-muted small mb-3">Juicy beef patty with melted cheese</p>
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <span class="price">$8.99</span>
                                <button class="btn btn-cart btn-sm">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pizza -->
                <div class="col-md-6 col-lg-3">
                    <div class="menu-item">
                        <div class="image-container">
                            <img src="images/Margherita Pizza.png" alt="Pizza">
                        </div>
                        <div class="menu-item-content">
                            <h5 class="fw-bold mb-2">Margherita Pizza</h5>
                            <p class="text-muted small mb-3">Fresh tomato and mozzarella</p>
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <span class="price">$12.99</span>
                                <button class="btn btn-cart btn-sm">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sandwich -->
                <div class="col-md-6 col-lg-3">
                    <div class="menu-item">
                        <div class="image-container">
                            <img src="images/Grilled Chicken Sandwich.png" alt="Sandwich">
                        </div>
                        <div class="menu-item-content">
                            <h5 class="fw-bold mb-2">Chicken Sandwich</h5>
                            <p class="text-muted small mb-3">Grilled chicken with fresh veggies</p>
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <span class="price">$7.50</span>
                                <button class="btn btn-cart btn-sm">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fries -->
                <div class="col-md-6 col-lg-3">
                    <div class="menu-item">
                        <div class="image-container">
                            <img src="images/Crispy Fries.png" alt="Fries">
                        </div>
                        <div class="menu-item-content">
                            <h5 class="fw-bold mb-2">Crispy Fries</h5>
                            <p class="text-muted small mb-3">Golden and seasoned</p>
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <span class="price">$3.99</span>
                                <button class="btn btn-cart btn-sm">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Sections -->
    <div class="container py-5">
        <!-- Starters -->
        <h2 class="category-header">Starters</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="menu-item">
                    <div class="image-container">
                        <img src="images/garlic-bread.jpg" alt="Garlic Bread">
                    </div>
                    <div class="menu-item-content">
                        <h4 class="fw-bold">Garlic Bread</h4>
                        <p class="text-muted">Crispy bread with garlic & herbs</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <span class="price">$4.99</span>
                            <button class="btn btn-cart btn-sm">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add more starters -->
        </div>

        <!-- Main Course -->
        <h2 class="category-header">Main Course</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="menu-item">
                    <div class="image-container">
                        <img src="images/grilled-chicken.jpg" alt="Grilled Chicken">
                    </div>
                    <div class="menu-item-content">
                        <h4 class="fw-bold">Grilled Chicken</h4>
                        <p class="text-muted">With mashed potatoes</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <span class="price">$13.99</span>
                            <button class="btn btn-cart btn-sm">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add more main courses -->
        </div>

        <!-- Desserts -->
        <h2 class="category-header">Desserts</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="menu-item">
                    <div class="image-container">
                        <img src="images/chocolate-cake.jpg" alt="Chocolate Cake">
                    </div>
                    <div class="menu-item-content">
                        <h4 class="fw-bold">Chocolate Cake</h4>
                        <p class="text-muted">Rich and moist chocolate cake</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <span class="price">$5.99</span>
                            <button class="btn btn-cart btn-sm">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Pizzas-->
        <h2 class="category-header">Pizzas</h2>
        <div class="row g-4">                      
            <div class="col-md-4">
                <div class="menu-item">
                    <div class="image-container">
                        <img src="images/pepperoni-pizza.jpg" alt="Pepperoni Pizza">
                    </div>
                    <div class="menu-item-content">
                        <h4 class="fw-bold">Pepperoni Pizza</h4>
                        <p class="text-muted">Spicy pepperoni and cheese</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <span class="price">$14.99</span>
                            <button class="btn btn-cart btn-sm">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- Burgers --}}
        <h2 class="category-header">Burgers</h2>
        <div class="row g-4">
            
            <div class="col-md-4">
                <div class="menu-item">
                    <div class="image-container">
                        <img src="images/cheeseburger.jpg" alt="Cheeseburger">
                    </div>
                    <div class="menu-item-content">
                        <h4 class="fw-bold">Cheeseburger</h4>
                        <p class="text-muted">Juicy beef with cheese</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <span class="price">$9.99</span>
                            <button class="btn btn-cart btn-sm">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Drinks --}}

        <h2 class="category-header">Drinks</h2>
        <div class="row g-4">
                
                <div class="col-md-4">
                    <div class="menu-item">
                        <div class="image-container">
                            <img src="images/coca-cola.jpg" alt="Coca Cola">
                        </div>
                        <div class="menu-item-content">
                            <h4 class="fw-bold">Coca Cola</h4>
                            <p class="text-muted">Refreshing cola drink</p>
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <span class="price">$1.99</span>
                                <button class="btn btn-cart btn-sm">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>               
        </div>




    </div>

    <!-- Offers Section -->
    <section class="container py-5">
        <h2 class="category-header">Special Offers</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="offer-box">
                    <span class="offer-badge">25% OFF</span>
                    <div class="image-container">
                        <img src="images/family combo.png" alt="Family Combo">
                    </div>
                    <div class="p-3">
                        <h3>Family Combo</h3>
                        <p class="text-muted">4 Burgers + Fries + Drinks</p>
                        <div class="d-flex align-items-center gap-2 mt-auto">
                            <span class="price">$25.99</span>
                            <del class="text-muted small">$32.99</del>
                        </div>
                        <button class="btn btn-warning w-100 mt-3">Claim Offer</button>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="offer-box">
                    <span class="offer-badge">27% OFF</span>
                    <div class="image-container">
                        <img src="images/snack attack.png" class="w-100" alt="Snack Attack">
                    </div>
                    <div class="p-3">
                        <h3>Snack Attack</h3>
                        <p class="text-muted">Fries, Nuggets & Cold Drink</p>
                        <div class="d-flex align-items-center gap-2 mt-auto">
                            <span class="price">$10.99</span>
                            <del class="text-muted small">$7.99</del>
                        </div>
                        <button class="btn btn-warning w-100 mt-3">Claim Offer</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="offer-box">
                    <span class="offer-badge">44% OFF</span>
                    <div class="image-container">
                        <img class="w-100" src="images/bogo burger.png" alt="BOGO Burger">
                    </div>
                    <div class="p-3">
                        <h3>BOGO Burger</h3>
                        <p class="text-muted">Buy 1 Get 1 Free - This Week Only</p>
                        <div class="d-flex align-items-center gap-2 mt-auto">
                            <span class="price-discounted">$17.98</span>
                            <del class="text-muted small">$9.99</del>
                        </div>
                        <button class="btn btn-warning w-100 mt-3">Claim Offer</button>
                    </div>
                </div>
            </div>
            <!-- Add more offers -->
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>