@extends('master')
@section('title', 'Car Shortlist')
@section('content')

<!-- <div>
    <div class="centered">
        <img src="img_avatar2.png" alt="Avatar woman">
        <h2>Jane Flex</h2>
        <p>
        <h1>
            <center> The perfect car for your next trip is just around the corner</center>
        </h1>
        </p>
        <p>
        <h2>
            <center>Book your drive now!</center>
        </h2>
        </p>
    </div>
</div> -->

<!--Car Short List-->
<div class="float-container">

    <!-- <div class="float-child-1">
        <br>
        <h3>Filter</h3>
        <form>
            <br>
            <b>Segment</b><br>
            <input type="checkbox" id="Hatchback" name="f1-segment" value="Hatchback">Hatchback<br>
            <input type="checkbox" id="Sedan" name="f1-segment" value="Sedan">Sedan<br>
            <input type="checkbox" id="SUV" name="f1-segment" value="SUV">SUV<br>
            <input type="checkbox" id="MUV" name="f1-segment" value="MUV">MUV
            <br>
            <br>
            <b>Brand</b><br>
            <input type="checkbox" name="f1-brand" value="Maruti">Maruti<br>
            <input type="checkbox" name="f1-brand" value="Hyundai">Hyundai<br>
            <input type="checkbox" name="f1-brand" value="Mahindra">Mahindra<br>
            <input type="checkbox" name="f1-brand" value="Honda">Honda
            <br>
            <br>
            <b>Fule Type</b><br>
            <input type="checkbox" name="f1-type" value="Diesel">Diesel<br>
            <input type="checkbox" name="f1-type" value="Petrol">Petrol<br>
            <br>
            <b>Seating Capacity</b><br>
            <input type="checkbox" name="f1-capacity" value="5_seats">5 seats<br>
            <input type="checkbox" name="f1-capacity" value="7_seats">7 seats<br>
            <br>
            <br>
            <input type="reset" id="reset" value="ClearAll">
        </form>
    </div> -->


    <div class="float-child-2">
        <!--<section class="services" id="services"></section>
            <div class="heading">
                <span>Best Services</span>
                <h1>Explore Out Top Deals <br> From Top Rated Dealers</h1>
            </div>-->
        <div class="services-container">
            <div class="box">
                <div class="box-img">
                    <img src="assets/images/car1.jpg" alt="car1">
                </div>
                <p></p>
                <h3>Nissan Kicks 2021</h3>
                <h2>₹251 <span>/hr</span></h2>
                <a href="nissan_kicks.html" class="btn">Rent Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="assets/images/car2.jpg" alt="car1">
                </div>
                <p></p>
                <h3>Mahindra XUV500 </h3>
                <h2> ₹300 <span>/hr</span></h2>
                <a href="xuv500.html" class="btn">Rent Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="assets/images/car3.jpg" alt="car1">
                </div>
                <p></p>
                <h3>KIA Sonet 2021</h3>
                <h2>₹420 <span>/hr</span></h2>
                <a href="KiaSonet.html" class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="assets/images/car4.jpg" alt="car1">
                </div>
                <p></p>
                <h3>Maruti Wagon R </h3>
                <h2>₹200 <span>/hr</span></h2>
                <a href="Maruti_WagonR.html" class="btn">Rent Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="assets/images/car5.jpg" alt="car1">
                </div>
                <p></p>
                <h3>2018 Honda Civic</h3>
                <h2> ₹300 <span>/hr</span></h2>
                <a href="hondaCivic.html" class="btn">Rent Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="assets/images/car6.jpg" alt="car1">
                </div>
                <p></p>
                <h3>Hyundai Grand i10 </h3>
                <h2> ₹190 <span>/hr</span></h2>
                <a href="i10.html" class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="assets/images/car7.jpg" alt="car1">
                </div>
                <p></p>
                <h3>Honda Amaze 2018</h3>
                <h2>₹350 <span>/hr</span></h2>
                <a href="hondaAmaze.html" class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="assets/images/car8.jpg" alt="car1">
                </div>
                <p></p>
                <h3>Hyundai Creta 2016</h3>
                <h2>₹195 <span>/hr</span></h2>
                <a href="creta.html" class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="assets/images/car9.jpg" alt="car1">
                </div>
                <p></p>
                <h3>Maruti Brezza 2020</h3>
                <h2>₹260 <span>/hr</span></h2>
                <a href="brezza.html" class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="assets/images/car10.jpg" alt="car1">
                </div>
                <p></p>
                <h3>Mahindra Marazzo 2018</h3>
                <h2>₹300 <span>/hr</span></h2>
                <a href="marazzo.html" class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="assets/images/car11.jpg" alt="car1">
                </div>
                <p></p>
                <h3>Renault Triber 2022</h3>
                <h2>₹368 <span>/hr</span></h2>
                <a href="tiber.html" class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="assets/images/car12.jpg" alt="car1">
                </div>
                <p></p>
                <h3>Ford Ecosport 2016</h3>
                <h2>₹162 <span>/hr</span></h2>
                <a href="ecosport.html" class="btn">Rent Now</a>
            </div>
        </div>
    </div>
</div>
@endsection