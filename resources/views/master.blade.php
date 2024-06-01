<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Car Rental Services')</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <!--Box Icons -->
    <meta name="csrf-token" content="{csrf_token()}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <style>
        /* Hide Loom extension injected element */
        #loom-companion-mv3 {
            display: none !important;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <a href="/" class="logo"><img src="assets/images/jeep.jpg" alt="Logo"></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar" id="navbar">
            <li><a href="/">Home</a></li>
            <li><a href="/Ride">Ride</a></li>
            <li><a href="/Services">Services</a></li>
            <li><a href="/About">About</a></li>
            <li><a href="/Reviews">Review</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div class="header-btn">
            <a href="/SignUp" class="sign-up">Sign Up</a>
            <a href="/SignIn" class="sign-in">Sign In</a>
        </div>
    </header>

    @yield('content')

    <div class="copyright">
        <p>&#169; carpoolvenom All Rights Reserved</p>
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-twitter'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
    </div>

    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- Navbar Toggle Script -->
    <script>
        const menuIcon = document.getElementById('menu-icon');
        const navbar = document.getElementById('navbar');

        menuIcon.addEventListener('click', () => {
            navbar.classList.toggle('active');
        });
    </script>
</body>

</html>
