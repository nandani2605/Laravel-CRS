<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Car Rental Serbices')</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <!--Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <!-- Header -->
    <header>
        <a href="index.html" class="logo"><img src="assets/images/jeep.jpg" alt=""></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#ride">Ride</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#reviews">Review</a></li>
        </ul>
        <div class="header-btn">
            <a href="/SignUp" class="sign-up">Sign Up</a>
            <a href="/SignIn" class="sign-in">Sign In</a>
        </div>
    </header>
    @yield('content')
    <!--Newsletter-->
    <section class="newsletter">
        <h2>Subscribe To Newsletter</h2>
        <div class="box">
            <input type="text" placeholder="Enter your email....">
            <a href="#" class="btn">Subscribe</a>
        </div>
    </section>
    <!--copyright-->
    <div class="copyright">
        <p>&#169 ; carpoolvenom All Right Reserved</p>
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-twitter'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
    </div>

    <!--Scroll Reveal-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- Link To JS-->
    <script src="JS.js"></script>
</body>

</html>