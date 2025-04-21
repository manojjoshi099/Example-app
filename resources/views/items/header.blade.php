    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
            <a class="navbar-brand" href="home">🍕 Pizza Hut</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="reservation">Reservation</a></li>
                    <li class="nav-item"><a class="nav-link" href="offers">Offers</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                    <li class="nav-item ms-3">
                        <a href="#" class="btn btn-custom">Order Now</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('register') }}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>