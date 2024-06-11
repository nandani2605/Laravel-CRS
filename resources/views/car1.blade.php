@extends('master')
@section('title', 'carList Shortlist')
@section('content')


<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .carList-details {
        width: 100%;
        margin: 80px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-wrap: wrap;
    }

    .box {
        flex: 1 1 40%;
        text-align: center;
        margin-bottom: 20px;
    }

    .box-img img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .box .price-rent {
        margin: 10px 0;
    }

    .details {
        flex: 1 1 60%;
        padding-left: 20px;
    }

    .details h3 {
        margin: 10px 0;
    }

    .details h2 {
        font-size: 1.5em;
        margin: 10px 0;
    }

    .details h2 span {
        font-size: 0.5em;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        margin: 10px 0;
        background-color: #28a745;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #218838;
    }

    .details h2 {
        margin-top: 20px;
        color: #333;
    }

    .details ul,
    .details ol {
        list-style-type: none;
        padding: 0;
        margin: 0 0 20px 0;
    }

    .details ul li,
    .details ol li {
        background: #e9ecef;
        margin: 5px 0;
        padding: 10px;
        border-radius: 5px;
    }

    .details ul ul {
        margin-left: 20px;
    }

    .details ul ul li {
        background: #f8f9fa;
    }

    @media (max-width: 768px) {
        .carList-details {
            flex-direction: column;
        }

        .box,
        .details {
            flex: 1 1 100%;
            padding: 0;
        }

        .details {
            padding-left: 0;
        }
    }
</style>
@foreach($cardetails as $carList)
<div class="carList-details">
    <div class="box sedan">
        <div class="box-img">
            <img src="{{ $cardetails->car_img }}" alt="{{ $cardetails->make_model }}">
        </div>
        <div class="price-rent">
            <h3>{{ $cardetails->make_model }}</h3>
            <h2>₹{{ $cardetails->hourly_rate }} <span>/hr</span></h2>
            <a href="#" class="btn">Rent Now</a>
        </div>
    </div>
    <div class="details">
        <div class="carList-specs">
            <h2>carList Specifications:</h2>
            <ul>
                <li><strong>Make & Model:</strong> {{ $cardetails->make_model }}</li>
                <li><strong>Year:</strong> {{ $cardetails->year }}</li>
                <li><strong>Type:</strong> {{ $cardetails->type }}</li>
                <li><strong>Engine:</strong> {{ $cardetails->engine }}</li>
                <li><strong>Transmission:</strong> {{ $cardetails->transmission }}</li>
                <li><strong>Mileage:</strong> {{ $cardetails->mileage }}</li>
                <li><strong>Seating Capacity:</strong> {{ $cardetails->seating_capacity }}</li>
                <li><strong>Color:</strong> {{ $cardetails->color }}</li>
            </ul>
            <h2>Features:</h2>
            <ul>
                @foreach(explode(',', $cardetails->features) as $feature)
                <li>{{ $feature }}</li>
                @endforeach
            </ul>
            <h2>Payment Details:</h2>
            <ul>
                <li><strong>Hourly Rate:</strong> ₹{{ $cardetails->hourly_rate }}</li>
                <li><strong>Daily Rate:</strong> ₹{{ $cardetails->daily_rate }}</li>
                <li><strong>Weekly Rate:</strong> ₹{{ $cardetails->weekly_rate }}</li>
                <li><strong>Monthly Rate:</strong> ₹{{ $cardetails->monthly_rate }}</li>
                <li><strong>Security Deposit:</strong> ₹{{ $cardetails->security_deposit }} (refundable)</li>
                <li><strong>Insurance:</strong> {{ $cardetails->insurance }}</li>
                <li><strong>Fuel Policy:</strong> {{ $cardetails->fuel_policy }}</li>
                <li><strong>Late Return Fee:</strong> ₹{{ $cardetails->late_return_fee }}/hr</li>
            </ul>
            <h2>Payment Methods:</h2>
            <ul>
                @foreach(explode(',', $cardetails->payment_methods) as $payment_method)
                <li>{{ $payment_method }}</li>
                @endforeach
            </ul>
            <h2>Rental Terms and Conditions:</h2>
            <ul>
                <li><strong>Age Requirement:</strong> {{ $cardetails->age_requirement }}</li>
                <li><strong>Booking Confirmation:</strong> {{ $cardetails->booking_confirmation }}</li>
                <li><strong>Cancellation Policy:</strong> {{ $cardetails->cancellation_policy }}</li>
                <li><strong>Damage Policy:</strong> {{ $cardetails->damage_policy }}</li>
                <li><strong>Mileage Limit:</strong> {{ $cardetails->mileage_limit }}</li>
            </ul>
            <h2>How to Book:</h2>
            <ol>
                @foreach(explode(',', $cardetails->how_to_book) as $step)
                <li>{{ $step }}</li>
                @endforeach
            </ol>
        </div>
    </div>
</div>
@endforeach

@endsection
