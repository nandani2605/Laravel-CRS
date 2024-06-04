@extends('master')
@section('title', 'Services')
@section('content')
<style>
    .car-boxes1 {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 20px;
        width: 100%;
    }

    .box {
        width: calc(25% - 20px);
        box-sizing: border-box;
        padding: 15px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 8px;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .box:hover {
        transform: translateY(-5px);
    }

    .box-img img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .box h3 {
        margin-top: 10px;
        font-size: 18px;
        color: #333;
    }

    .box h2 {
        margin-top: 5px;
        font-size: 22px;
        color: #e74c3c;
    }

    .box .btn {
        display: inline-block;
        margin-top: 10px;
        padding: 10px 20px;
        background-color: #e74c3c;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    .box .btn:hover {
        background-color: #c0392b;
    }

    @media (max-width: 1200px) {
        .box {
            width: calc(33.33% - 20px);
        }
    }

    @media (max-width: 992px) {
        .box {
            width: calc(50% - 20px);
        }
    }

    @media (max-width: 768px) {
        .box {
            width: calc(50% - 20px);
        }
    }

    @media (max-width: 576px) {
        .box {
            width: calc(100% - 20px);
        }
    }
</style>

<!-- Services -->
<<div class="heading">
    <span>Best Services</span>
    <h1>Explore Our Top Deals From Top Rated Dealers</h1>
</div>

<div class="car-boxes1">
    <div class="row">
        <div class="box sedan">
            <div class="box-img">
                <img src="assets/images/car1.jpg" alt="car1">
            </div>
            <h3>Nissan Kicks 2021</h3>
            <h2>₹251 <span>/hr</span></h2>
            <a href="/car1" class="btn">Rent Now</a>
        </div>

        <div class="box suv">
            <div class="box-img">
                <img src="assets/images/car2.jpg" alt="car2">
            </div>
            <h3>Mahindra XUV500</h3>
            <h2>₹300 <span>/hr</span></h2>
            <a href="#" class="btn">Rent Now</a>
        </div>

        <div class="box hatchback">
            <div class="box-img">
                <img src="assets/images/car3.jpg" alt="car3">
            </div>
            <h3>KIA Sonet 2021</h3>
            <h2>₹420 <span>/hr</span></h2>
            <a href="#" class="btn">Rent Now</a>
        </div>

        <div class="box sedan">
            <div class="box-img">
                <img src="assets/images/car1.jpg" alt="car1">
            </div>
            <h3>Nissan Kicks 2021</h3>
            <h2>₹251 <span>/hr</span></h2>
            <a href="#" class="btn">Rent Now</a>
        </div>
    </div>
    <!-- Add more car boxes as needed -->
    <div class="row">
        <div class="box sedan">
            <div class="box-img">
                <img src="assets/images/car1.jpg" alt="car1">
            </div>
            <h3>Nissan Kicks 2021</h3>
            <h2>₹251 <span>/hr</span></h2>
            <a href="#" class="btn">Rent Now</a>
        </div>

        <div class="box suv">
            <div class="box-img">
                <img src="assets/images/car2.jpg" alt="car2">
            </div>
            <h3>Mahindra XUV500</h3>
            <h2>₹300 <span>/hr</h2>
            <a href="#" class="btn">Rent Now</a>
        </div>

        <div class="box hatchback">
            <div class="box-img">
                <img src="assets/images/car3.jpg" alt="car3">
            </div>
            <h3>KIA Sonet 2021</h3>
            <h2>₹420 <span>/hr</span></h2>
            <a href="#" class="btn">Rent Now</a>
        </div>

        <div class="box sedan">
            <div class="box-img">
                <img src="assets/images/car1.jpg" alt="car1">
            </div>
            <h3>Nissan Kicks 2021</h3>
            <h2>₹251 <span>/hr</span></h2>
            <a href="#" class="btn">Rent Now</a>
        </div>
    </div>
</div>

@endsection
