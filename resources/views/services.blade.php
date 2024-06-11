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


<div class="heading">
    <span>Best Services</span>
    <h1>Explore Our Top Deals From Top Rated Dealers</h1>
</div>
<div class="car-boxes1">
    @php $count = 0; @endphp
    @foreach($cardetails as $carList)
    @if($count % 4 == 0)
    <div class="row">
        @endif
        <div class="box {{ $carList->type }}">
            <div class="box-img">
                <img src="{{ $carList->car_img }}" alt="{{ $carList->make_model }}">
            </div>
            <h3>{{ $carList->make_model }}</h3>
            <h2>₹{{ $carList->hourly_rate }} <span>/hr</span></h2>
            <a href="{{ route('viewCar',$carList->uuid) }}" class="btn">Rent Now</a>
        </div>
        @php $count++; @endphp
        @if($count % 4 == 0)
    </div>
    @endif
    @endforeach
</div>
@endsection
