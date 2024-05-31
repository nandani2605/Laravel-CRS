@extends('master')
@section('title', 'Ride')
@section('content')

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
@endsection