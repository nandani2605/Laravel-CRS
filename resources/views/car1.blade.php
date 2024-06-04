@extends('master')
@section('title', 'Car Shortlist')
@section('content')


<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .car-details {
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
        .car-details {
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
<div class="car-details">
    <div class="box sedan">
        <div class="box-img">
            <img src="assets/images/car1.jpg" alt="Nissan Kicks 2021">
        </div>
        <div class="price-rent">
            <h3>Nissan Kicks 2021</h3>
            <h2>₹251 <span>/hr</span></h2>
            <a href="#" class="btn">Rent Now</a>
        </div>
    </div>
    <div class="details">
        <div class="car-specs">
            <h2>Car Specifications:</h2>
            <ul>
                <li><strong>Make & Model:</strong> Nissan Kicks</li>
                <li><strong>Year:</strong> 2021</li>
                <li><strong>Type:</strong> Sedan</li>
                <li><strong>Engine:</strong> 1.3L Turbo Petrol</li>
                <li><strong>Transmission:</strong> Automatic</li>
                <li><strong>Mileage:</strong> 16.8 km/l</li>
                <li><strong>Seating Capacity:</strong> 5</li>
                <li><strong>Color:</strong> Multiple options available</li>
            </ul>
            <h2>Features:</h2>
            <ul>
                <li>Touchscreen Infotainment System</li>
                <li>Climate Control</li>
                <li>Rear Parking Camera</li>
                <li>Cruise Control</li>
                <li>Keyless Entry</li>
                <li>Alloy Wheels</li>
            </ul>
            <h2>Payment Details:</h2>
            <ul>
                <li><strong>Hourly Rate:</strong> ₹251</li>
                <li><strong>Daily Rate:</strong> ₹6000</li>
                <li><strong>Weekly Rate:</strong> ₹35,000</li>
                <li><strong>Monthly Rate:</strong> ₹1,20,000</li>
                <li><strong>Additional Charges:</strong></li>
                <ul>
                    <li>Security Deposit: ₹5,000 (refundable)</li>
                    <li>Insurance: Included</li>
                    <li>Fuel Policy: Full to Full (Vehicle must be returned with the same fuel level as at the time of renting)</li>
                    <li>Late Return Fee: ₹300/hr</li>
                </ul>
            </ul>
            <h2>Payment Methods:</h2>
            <ul>
                <li>Credit/Debit Card</li>
                <li>Net Banking</li>
                <li>UPI</li>
                <li>Mobile Wallets</li>
            </ul>
            <h2>Rental Terms and Conditions:</h2>
            <ul>
                <li><strong>Age Requirement:</strong> Minimum age 21 years with a valid driving license.</li>
                <li><strong>Booking Confirmation:</strong> Payment must be made to confirm the booking.</li>
                <li><strong>Cancellation Policy:</strong> Free cancellation up to 24 hours before the scheduled pick-up time.</li>
                <li><strong>Damage Policy:</strong> Any damage to the car during the rental period will be charged as per the actual cost of repair.</li>
                <li><strong>Mileage Limit:</strong> 250 km per day, additional charges of ₹15/km apply for extra kilometers.</li>
            </ul>
            <h2>How to Book:</h2>
            <ol>
                <li>Select the Car: Click on the "Rent Now" button.</li>
                <li>Choose Rental Duration: Select the duration for which you need the car.</li>
                <li>Make Payment: Complete the payment process using your preferred payment method.</li>
                <li>Booking Confirmation: Receive a confirmation email with the booking details.</li>
            </ol>
        </div>
    </div>
</div>

@endsection
