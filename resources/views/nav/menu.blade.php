<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @include('items.header')
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
                        <h5>Classic Cheese Burger</h5>
                        <p>Juicy patty with cheese delight.</p>
                        <span class="price-discounted">$8.99</span>
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
                    <h4>Garlic Bread</h4>
                    <p>Crispy bread with garlic & herbs.</p>
                    <span class="price">$4.99</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/spring-rolls.jpg" alt="Spring Rolls">
                    <h4>Spring Rolls</h4>
                    <p>Stuffed with fresh vegetables and noodles.</p>
                    <span class="price">$5.99</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="images/spring-rolls.jpg" alt="Spring Rolls">
                    <h4>Spring Rolls</h4>
                    <p>Stuffed with fresh vegetables and noodles.</p>
                    <span class="price">$5.99</span>
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
                    <img src="images/family combo.png" alt="Family Combo">
                    <h3>Family Combo</h3>
                    <p>4 Burgers, 2 Fries, 4 Soft Drinks</p>
                    <div>
                        <span class="price-original">$32.99</span><br>
                        <span class="price-discounted">$25.99</span> (21% OFF)
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="offer-box">
                    <img src="images/snack attack.png" alt="Snack Attack">
                    <h3>Snack Attack</h3>
                    <p>Fries, Nuggets & Cold Drink</p>
                    <div>
                        <span class="price-original">$10.99</span><br>
                        <span class="price-discounted">$7.99</span> (27% OFF)
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="offer-box">
                    <img src="images/bogo burger.png" alt="BOGO Burger">
                    <h3>BOGO Burger</h3>
                    <p>Buy 1 Get 1 Free - This Week Only</p>
                    <div>
                        <span class="price-original">$17.98</span><br>
                        <span class="price-discounted">$9.99</span> (44% OFF)
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
