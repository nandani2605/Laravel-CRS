@extends('master')
@section('title', 'Home')
@section('content')
<!-- Home -->
<style>
    .form-container {
        max-width: 400px;
        margin: 0 auto;
    }

    .input-box {
        margin-bottom: 10px;
    }

    /* Autocomplete dropdown styling */
    .ui-autocomplete {
        max-height: 200px;
        overflow-y: auto;
        overflow-x: hidden;
        padding-left: 0;
        list-style-type: none;
        border: 1px solid #ccc;
        background-color: #fff;
        position: absolute;
        z-index: 1000;
        width: calc(10% - 2px);
        /* Adjust width to match the input field */
    }

    .ui-menu-item {
        padding: 10px;
        cursor: pointer;
    }

    .ui-menu-item:hover {
        background-color: #f0f0f0;
    }
</style>
<section class="home" id="home">
    <div class="text">
        <h1><span>Looking </span>to <br> rent a car</h1>
        <p>The perfect car for your next trip is just around the corner
            <br> Book your drive now!
        </p>
        <div class="app-stores">
            <img src="assets/images/ios.png" alt="reload">
            <img src="assets/images/512x512.png" alt="">

        </div>
    </div>
    <div class="form-container">
        <form method="POST">

            <div class="input-box">
                <span>Location</span>
                <input type="search" name="location" id="location" placeholder="Search places">
            </div>
            <div class="input-box">
                <span>Pick-Up Date</span>
                <input type="date" name="pickup_date" id="pickup_date">
            </div>
            <div class="input-box">
                <span>Return Date</span>
                <input type="date" name="return_date" id="return_date">
            </div>
            <input type="submit" class="btn" value="Submit">
        </form>
    </div>
</section>
<!--ride section-->
<section class="ride" id="ride">
    <div class="heading">
        <span>How Its Work</span>
        <h1>Rent With 3 Easy Steps</h1>
    </div>
    <div class="ride-container">
        <div class="box">
            <i class='bx bxs-map'></i>
            <h2>Choose A Location</h2>
            <p>Choose alocation from where you want to pick the car</p>
        </div>

        <div class="box">
            <i class='bx bxs-calendar-check'></i>
            <h2>Pick-Up Date</h2>
            <p>Select the date according to your need and no of hours you want to rent</p>
        </div>

        <div class="box">
            <i class='bx bxs-calendar-star'></i>
            <h2>Book A Car</h2>
            <p>Book a car by submitting the important documents and after verification the car is yours !</p>
        </div>
    </div>
</section>
<!-- Services -->
<div class="heading">
    <span>Best Services</span>
    <h1>Explore Our Top Deals <br> From Top Rated Dealers</h1>
</div>
<div class="services-wrapper">
    <button class="arrow left-arrow">&lt;</button>
    <div class="services-container">
        <div class="box">
            <div class="box-img">
                <img src="assets/images/car1.jpg" alt="car1">
            </div>
            <p></p>
            <h3>Nissan Kicks 2021</h3>
            <h2>₹251 <span>/hr</span></h2>
            <a href="#" class="btn">Rent Now</a>
        </div>

        <div class="box">
            <div class="box-img">
                <img src="assets/images/car2.jpg" alt="car1">
            </div>
            <p></p>
            <h3>Mahindra XUV500 </h3>
            <h2> ₹300 <span>/hr</span></h2>
            <a href="#" class="btn">Rent Now</a>
        </div>

        <div class="box">
            <div class="box-img">
                <img src="assets/images/car3.jpg" alt="car1">
            </div>
            <p></p>
            <h3>KIA Sonet 2021</h3>
            <h2>₹420 <span>/hr</span></h2>
            <a href="#" class="btn">Rent Now</a>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="assets/images/car4.jpg" alt="car1">
            </div>
            <p></p>
            <h3>Maruti Wagon R </h3>
            <h2>₹200 <span>/hr</span></h2>
            <a href="#" class="btn">Rent Now</a>
        </div>

        <div class="box">
            <div class="box-img">
                <img src="assets/images/car5.jpg" alt="car1">
            </div>
            <p></p>
            <h3>2018 Honda Civic</h3>
            <h2>₹58500 | ₹358 <span>/month</span></h2>
            <a href="#" class="btn">Rent Now</a>
        </div>

        <div class="box">
            <div class="box-img">
                <img src="assets/images/car6.jpg" alt="car1">
            </div>
            <p></p>
            <h3>Hyundai Grand i10 </h3>
            <h2> ₹190 <span>/hr</span></h2>
            <a href="#" class="btn">Rent Now</a>
        </div>
    </div>
    <button class="arrow right-arrow">&gt;</button>
</div>
<!--about section-->
<section class="about" id="about">
    <div class="heading">
        <span>About Us</span>
        <h1>Best Customer Experience</h1>
    </div>
    <div class="about-container">
        <div class="about-img">
            <img src="assets/images/about.png" alt="">
        </div>
        <div class="about-text">
            <span>About Us</span>
            <p>Our Car Rental website is India’s largest marketplace for cars on rent. From short road trips to quick
                in-city drives for groceries, supply pick-up, food runs, we have the cheapest car rental options for all
                your needs! A hatchback for daily commute, a sedan for short trips, SUV for hills or a luxury car for a
                surprise.</p>
            <p>With us, you can experience the convenience of online booking. The cars listed on our platform come with
                all-India permits that include vehicle insurance. It is extremely easy to pick up the car from the host
                location. You can drive unlimited KMs, with 100% Free Cancellation up to 6 hours before the trip start,
                0 Security Deposit, 0 Toll Charges, and 24/7 Roadside Assistance. Car rent per KM starts as low as Rs.
                149/hour. From short road trips to quick in-city drives for groceries, supply pick-up, meeting friends
                and family, doctor visits, business trips, we have the cheapest car rental options for all your needs! A
                hatchback for daily commute, a sedan for short trips, SUV for hills or a luxury car for a surprise.</p>
            <a href="#" class="btn">learn More</a>
        </div>
    </div>
</section>
<!--reviews-->
<section class="reviews" id="reviews">
    <div class="heading">
        <span>Reviews</span>
        <h1>Whats Our Customer Says.......</h1>
    </div>
    <div class="review-container">
        <div class="box">
            <div class="rev-img">
                <img src="assets/images/rev1.jpg" alt="">
            </div>
            <h2>Arvind</h2>
            <div class="stars">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star-half"></i>
            </div>
            <p>Flattered with availability of well maintained cars</p>
        </div>
        <div class="box">
            <div class="rev-img">
                <img src="assets/images/rev2.jpg" alt="">
            </div>
            <h2>Gaurav</h2>
            <div class="stars">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star-half"></i>
            </div>
            <p>Booked a XUV with unlimited kms, very happy with car's service
            <p>
        </div>
        <div class="box">
            <div class="rev-img">
                <img src="assets/images/rev3.jpg" alt="">
            </div>
            <h2>Himanshi </h2>
            <div class="stars">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star-half"></i>
            </div>
            <p>Booked a car for a family trip which was very comfortable and in great condition

            </p>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const servicesContainer = document.querySelector('.services-container');
        const leftArrow = document.querySelector('.left-arrow');
        const rightArrow = document.querySelector('.right-arrow');

        let scrollAmount = 0;
        const boxWidth = document.querySelector('.box').offsetWidth + 20; // Box width + margin
        const maxScroll = servicesContainer.scrollWidth - servicesContainer.clientWidth;

        function autoScroll() {
            scrollAmount += boxWidth;
            if (scrollAmount > maxScroll) {
                scrollAmount = 0;
            }
            servicesContainer.style.transform = `translateX(-${scrollAmount}px)`;
        }

        let autoScrollInterval = setInterval(autoScroll, 3000);

        leftArrow.addEventListener('click', () => {
            clearInterval(autoScrollInterval);
            scrollAmount -= boxWidth;
            if (scrollAmount < 0) {
                scrollAmount = maxScroll;
            }
            servicesContainer.style.transform = `translateX(-${scrollAmount}px)`;
            autoScrollInterval = setInterval(autoScroll, 3000);
        });

        rightArrow.addEventListener('click', () => {
            clearInterval(autoScrollInterval);
            scrollAmount += boxWidth;
            if (scrollAmount > maxScroll) {
                scrollAmount = 0;
            }
            servicesContainer.style.transform = `translateX(-${scrollAmount}px)`;
            autoScrollInterval = setInterval(autoScroll, 3000);
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function() {
        var availableLocations = [
            "Ahmedabad",
            "Surat",
            "Vadodara",
            "Rajkot",
            "Bhavnagar",
            "Jamnagar",
            "Junagadh",
            "Gandhinagar",
            "Anand",
            "Nadiad",
            "Morbi",
            "Surendranagar",
            "Bharuch",
            "Porbandar",
            "Godhra",
            "Navsari",
            "Ankleshwar",
            "Valsad",
            "Veraval",
            "Gandhidham",
            "Palanpur",
            "Bhuj",
            "Vapi",
            "Morvi",
            "Anjar",
            "Dhoraji",
            "Jetpur",
            "Keshod",
            "Mangrol",
            "Mehsana"
        ];
        availableLocations.sort();
        $("#location").autocomplete({
            source: availableLocations
        });

        // You can add selection methods here if needed
    });
</script>
@endsection
