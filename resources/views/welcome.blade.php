<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="public/css/style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <!-- Custom CSS -->
    <title>Restaurant Hero</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- HEADER / NAVBAR -->
    @include('items.header')

    <!-- HERO SECTION with background shapes -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h1 class="hero-title">King's Burger</h1>
                    <p class="hero-subtitle">
                        Perfect Burger, Perfect Taste. Discover the freshness in every bite crafted with premium
                        ingredients.
                    </p>
                    <div class="rating">⭐ ⭐ ⭐ ⭐ ⭐ <span>4.8</span></div>
                    <a href="#" class="btn btn-custom">Get Started</a>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="discount">UPTO <br><strong>20%</strong><br>DISCOUNT</div>
                    <div class="hero-image">
                        <div class="red-bg"></div>
                        <img src="images/burger.png" alt="Burger">
                    </div>
                </div>
            </div>
        </div>
        <!-- Additional red shape in Hero Section -->
        <div class="red-shape red-circle" style="top: 20%; left: 5%;"></div>
    </section>

    <!-- PERFECT INGREDIENT SECTION -->
    <section class="perfect-ingredient">
        <div class="container text-center">
            <h2 class="title">Perfect Ingredient is Exceptional</h2>
            <p class="mx-auto mb-5" style="max-width: 700px;">
                We use only the freshest, highest quality ingredients to create a symphony of flavors.
            </p>
            <div class="row justify-content-center g-4">
                <div class="col-md-4 text-center">
                    <div class="ingredient-wrapper">
                        <img src="images/healthy_food.png" alt="Fresh Lettuce" class="ingredient-circle-img" />
                    </div>
                    <h5>Fresh Lettuce</h5>
                    <p class="small">Crisp and crunchy, perfect for every bite.</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="ingredient-wrapper">
                        <img src="images/juicy_tomatos.png" alt="Juicy Tomato" class="ingredient-circle-img" />
                    </div>
                    <h5>Juicy Tomatoes</h5>
                    <p class="small">Bursting with natural sweetness and tang.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CHOOSE CATEGORY SECTION -->
    <section class="choose-category">
        <div class="container text-center">
            <h2 class="title">Choose a Category</h2>
            <div class="row g-4">
                <div class="col-6 col-md-3">
                    <div class="category-box">
                        <img src="images/burger.png" alt="Burger" />
                        <h6 class="mt-2">Burger</h6>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-box">
                        <img src="images/pizza.png" alt="Pizza" />
                        <h6 class="mt-2">Pizza</h6>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-box rounded-shadow">
                        <img src="images/Sandwich.png" alt="Sandwich" />
                        <h6 class="mt-2">Sandwich</h6>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-box">
                        <img src="images/Drinks.png" alt="Drinks" />
                        <h6 class="mt-2">Drinks</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW WE WORK SECTION -->
    <section class="how-we-work">
        <div class="container text-center">
            <h2 class="title">How We Work</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-6 col-md-3">
                    <div class="work-step">
                        <img src="images/Order Online.png" alt="Order Online" />
                        <h6>Order Online</h6>
                        <p class="small">Choose your favorites from our menu.</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="work-step">
                        <img src="images/We Prepare.png" alt="We Prepare" />
                        <h6>We Prepare</h6>
                        <p class="small">Our chefs craft your meal with care.</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="work-step">
                        <img src="images/Fast Delivery.png" alt="Fast Delivery" />
                        <h6>Fast Delivery</h6>
                        <p class="small">Delivered hot and fresh right to you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAST FOOD MENU SECTION -->
    <section class="fast-food-menu py-5">
        <div class="container">
            <h2 class="title text-center mb-4">Fast Food Menu</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="menu-item card h-100 text-center p-3">
                        <img src="images/Classic Cheese Burger.png" class="menu-img" alt="Classic Cheese Burger" />
                        <h5 class="mt-3">Classic Cheese Burger</h5>
                        <p>A timeless favorite with a juicy patty.</p>
                        <span class="fw-bold">$8.99</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="menu-item card h-100 text-center p-3">
                        <img src="images/Margherita Pizza.png" class="menu-img" alt="Margherita Pizza" />
                        <h5 class="mt-3">Margherita Pizza</h5>
                        <p>Fresh sauce & mozzarella baked to perfection.</p>
                        <span class="fw-bold">$10.99</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="menu-item card h-100 text-center p-3">
                        <img src="images/Grilled Chicken Sandwich.png" class="menu-img"
                            alt="Grilled Chicken Sandwich" />
                        <h5 class="mt-3">Grilled Chicken Sandwich</h5>
                        <p>Tender chicken with fresh greens.</p>
                        <span class="fw-bold">$7.50</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="menu-item card h-100 text-center p-3">
                        <img src="images/Crispy Fries.png" class="menu-img" alt="Crispy Fries" />
                        <h5 class="mt-3">Crispy Fries</h5>
                        <p>Golden and perfectly seasoned.</p>
                        <span class="fw-bold">$3.99</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WE PROVIDE BEST SECTION -->
    <section class="section py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Column -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="images/We Provide Best.png" alt="We Provide Best" class="img-fluid rounded section-img" />
                </div>

                <!-- Text Column -->
                <div class="col-md-6">
                    <h2 class="title1 mb-3 ">We Provide Best</h2>
                    <p class="section-text mb-4">
                        Our commitment to quality means every ingredient and every dish is carefully crafted to deliver
                        an exceptional dining experience.
                    </p>
                    <a href="#" class="btn btn-custom">Learn More</a>
                </div>
            </div>
        </div>
    </section>


    {{-- A COLLABORATION OF UNIQUE FLAVORS SECTION 
    <section class="section"
        style="background: url('https://via.placeholder.com/1920x600?text=Unique+Flavors') center/cover no-repeat;">
        <div class="container text-center text-white" style="position: relative; z-index: 2;">
            <h2 class="title">A Collaboration of Unique Flavors</h2>
            <p class="mx-auto mb-5" style="max-width: 700px;">
                Experience a fusion of global culinary delights, curated to satisfy every palate.
            </p>
            <div class="row g-4">
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/300x250?text=Flavor+1" alt="Flavor 1" class="section-img" />
                </div>
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/300x250?text=Flavor+2" alt="Flavor 2" class="section-img" />
                </div>
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/300x250?text=Flavor+3" alt="Flavor 3" class="section-img" />
                </div>
            </div>
        </div>
    </section> --}}

    <!-- COMPLIMENTARY OFFER SECTION -->
    <section class="section">
        <div class="container text-center">
            <h2 class="title">A Complimentary Cocktail, Coffee, or Dessert</h2>
            <p class="mx-auto mb-5" style="max-width: 700px;">
                Complete your dining experience with a refreshing cocktail, a warm cup of coffee, or a sweet dessert on
                us.
            </p>
            <div class="row g-4">
                <div class="col-md-4">
                    <img src="images/Refreshing Cocktail.png" alt="Cocktail" class="section-img" />
                    <h5 class="mt-3">Refreshing Cocktail</h5>
                </div>
                <div class="col-md-4">
                    <img src="images/Premium Coffee.png" alt="Coffee" class="section-img" />
                    <h5 class="mt-3">Premium Coffee</h5>
                </div>
                <div class="col-md-4">
                    <img src="images/Sweet Dessert.png" alt="Dessert" class="section-img" />
                    <h5 class="mt-3">Sweet Dessert</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- BEST SELLER DEALS SECTION -->
    <section class="best-seller py-5">
        <div class="container">
            <h2 class="title text-center mb-4">Best Seller Deals</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="deal-card card h-100 text-center p-3">
                        <img src="images/Family Feast.png" class="deal-img" alt="Family Feast" />
                        <div class="card-body">
                            <h5>Family Feast</h5>
                            <p>4 Burgers + 4 Fries + 4 Drinks</p>
                            <span class="fw-bold">$24.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="deal-card card h-100 text-center p-3">
                        <img src="images/Couple Meal.png" class="deal-img" alt="Couple Meal" />
                        <div class="card-body">
                            <h5>Couple Meal</h5>
                            <p>2 Burgers + 2 Drinks + Dessert</p>
                            <span class="fw-bold">$14.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="deal-card card h-100 text-center p-3">
                        <img src="images/Pizza Combo.png" class="deal-img" alt="Pizza Combo" />
                        <div class="card-body">
                            <h5>Pizza Combo</h5>
                            <p>1 Large Pizza + 2 Sides + 2 Drinks</p>
                            <span class="fw-bold">$18.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="deal-card card h-100 text-center p-3">
                        <img src="images/Snack Box.png" class="deal-img" alt="Snack Box" />
                        <div class="card-body">
                            <h5>Snack Box</h5>
                            <p>Chicken Nuggets + Fries + Shake</p>
                            <span class="fw-bold">$9.99</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EXTRA MUNCHIES SECTION -->
    <!-- <section class="section">
    <div class="container text-center">
        <h2 class="title">Pablo's Munchies</h2>
        <p class="mx-auto mb-4" style="max-width: 700px;">
        Try Pablo's Munchies for a burst of exotic flavors that will surprise your taste buds.
        </p>
        <div class="row g-4 justify-content-center">
        <div class="col-md-4">
            <img src="https://via.placeholder.com/300x250?text=Munchies+1" alt="Munchies Supreme" class="section-img" />
            <h5 class="mt-3">Munchies Supreme</h5>
        </div>
        <div class="col-md-4">
            <img src="https://via.placeholder.com/300x250?text=Munchies+2" alt="Munchies Hot 'n Spicy" class="section-img" />
            <h5 class="mt-3">Munchies Hot 'n Spicy</h5>
        </div>
        </div>
    </div>
    </section> -->

    <!-- FOOTER -->
    @include('items.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>