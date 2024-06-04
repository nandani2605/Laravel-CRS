@extends('admin.master')
@section('title', 'Admin Car List')
@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    .container {
        background: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        margin: 20px auto;
    }

    h2,
    h3 {
        text-align: center;
        color: #333333;
    }

    .section {
        border: 1px solid #dddddd;
        border-radius: 4px;
        padding: 20px;
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #555555;
    }

    input[type="text"],
    input[type="number"],
    input[type="file"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #dddddd;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background: #4CAF50;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        width: 100%;
    }

    input[type="submit"]:hover {
        background: #45a049;
    }

    textarea {
        resize: vertical;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 10px;
    }

    .col-half {
        flex: 1;
        padding: 10px;
    }

    .col-half:nth-child(odd) {
        padding-right: 5px;
    }

    .col-half:nth-child(even) {
        padding-left: 5px;
    }

    @media (max-width: 600px) {
        .container {
            width: 90%;
        }

        .col-half {
            flex: 100%;
            padding: 5px 0;
        }
    }
</style>

<div class="container">
    <h2>Add Car Details</h2>

    <form action="{{ route('carList.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="section">
            <h3>Car Information</h3>
            <label for="car_img">Car Image:</label>
            <input type="file" id="car_img" name="car_img" accept="image/*" required>

            <div class="row">
                <div class="col-half">
                    <label for="make-model">Make & Model:</label>
                    <input type="text" id="make_model" name="make_model" required>
                </div>
                <div class="col-half">
                    <label for="year">Year:</label>
                    <input type="number" id="year" name="year" required>
                </div>
            </div>

            <div class="row">
                <div class="col-half">
                    <label for="type">Type:</label>
                    <input type="text" id="type" name="type" required>
                </div>
                <div class="col-half">
                    <label for="engine">Engine:</label>
                    <input type="text" id="engine" name="engine" required>
                </div>
            </div>

            <div class="row">
                <div class="col-half">
                    <label for="transmission">Transmission:</label>
                    <input type="text" id="transmission" name="transmission" required>
                </div>
                <div class="col-half">
                    <label for="mileage">Mileage:</label>
                    <input type="text" id="mileage" name="mileage" required>
                </div>
            </div>

            <div class="row">
                <div class="col-half">
                    <label for="seating-capacity">Seating Capacity:</label>
                    <input type="number" id="seating_capacity" name="seating_capacity" required>
                </div>
                <div class="col-half">
                    <label for="color">Color:</label>
                    <input type="text" id="color" name="color" required>
                </div>
            </div>
        </div>

        <div class="section">
            <h3>Features</h3>
            <label for="features">Features:</label>
            <textarea id="features" name="features" rows="4" placeholder="Comma separated features" required></textarea>
        </div>

        <div class="section">
            <h3>Payment Details</h3>
            <div class="row">
                <div class="col-half">
                    <label for="hourly-rate">Hourly Rate (₹):</label>
                    <input type="number" id="hourly_rate" name="hourly_rate" required>
                </div>
                <div class="col-half">
                    <label for="daily-rate">Daily Rate (₹):</label>
                    <input type="number" id="daily_rate" name="daily_rate" required>
                </div>
            </div>

            <div class="row">
                <div class="col-half">
                    <label for="weekly-rate">Weekly Rate (₹):</label>
                    <input type="number" id="weekly_rate" name="weekly_rate" required>
                </div>
                <div class="col-half">
                    <label for="monthly-rate">Monthly Rate (₹):</label>
                    <input type="number" id="monthly_rate" name="monthly_rate" required>
                </div>
            </div>

            <div class="row">
                <div class="col-half">
                    <label for="security-deposit">Security Deposit (₹):</label>
                    <input type="number" id="security_deposit" name="security_deposit" required>
                </div>
                <div class="col-half">
                    <label for="late-return-fee">Late Return Fee (₹/hr):</label>
                    <input type="number" id="late_return_fee" name="late_return_fee" required>
                </div>
            </div>

            <label for="insurance">Insurance:</label>
            <input type="text" id="insurance" name="insurance" required value="Included" readonly>

            <label for="fuel-policy">Fuel Policy:</label>
            <input type="text" id="fuel_policy" name="fuel_policy" required value="Full to Full" readonly>
        </div>

        <div class="section">
            <h3>Payment Methods</h3>
            <label for="payment-methods">Payment Methods:</label>
            <textarea id="payment_methods" name="payment_methods" rows="4" placeholder="Comma separated payment methods" required></textarea>
        </div>

        <div class="section">
            <h3>Rental Terms and Conditions</h3>
            <label for="age-requirement">Age Requirement:</label>
            <input type="text" id="age_requirement" name="age_requirement" required>

            <label for="booking-confirmation">Booking Confirmation:</label>
            <input type="text" id="booking_confirmation" name="booking_confirmation" required>

            <label for="cancellation-policy">Cancellation Policy:</label>
            <input type="text" id="cancellation_policy" name="cancellation_policy" required>

            <label for="damage-policy">Damage Policy:</label>
            <input type="text" id="damage_policy" name="damage_policy" required>

            <label for="mileage-limit">Mileage Limit:</label>
            <input type="text" id="mileage_limit" name="mileage_limit" required>
        </div>

        <div class="section">
            <h3>How to Book</h3>
            <label for="how-to-book">Steps:</label>
            <textarea id="how_to_book" name="how_to_book" rows="4" placeholder="Step-by-step booking process" required></textarea>
        </div>

        <div class="section">
            <input type="submit" value="Submit Car Details" name="submit">
        </div>
    </form>
</div>
@endsection
