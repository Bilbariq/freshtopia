<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freshtopia - @yield('title', 'Freshly Made Fruit Drinks')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="{{ route('home') }}">FRESHTOPIA</a>
            </div>
            <div class="nav-links">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('menu') }}">Menu</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('contact') }}">Contact Us</a>
                <a href="{{ route('faq') }}">FAQ</a>
                <a href="{{ route('location') }}">Location</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-logo">
                <h2>FRESHTOPIA</h2>
                <p>EST. 2025</p>
            </div>
            <div class="footer-links">
                <h3>Links</h3>
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('menu') }}">Menu</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('contact') }}">Contact Us</a>
                <a href="{{ route('faq') }}">FAQ</a>
                <a href="{{ route('location') }}">Location</a>
            </div>
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>Email: info@freshtopia.com</p>
                <p>Phone: +1234567890</p>
                <div class="social-icons">
                    <!-- Social media icons -->
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2025 Freshtopia. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>