@extends('master')
@section('title', 'Contact')
@section('content')
<style>
    body {
        background-image: url('assets/images/carback.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .orange-box {
        background-color: orange;
        padding: 20px;
        border-radius: 10px;
        width: 400px;
        position: absolute;
        left: 160px;
        /* Adjust this value as needed */
        top: 200px;
        /* Adjust this value as needed */
    }


    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .form-group textarea {
        width: 100%;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .form-group button {
        padding: 8px 20px;
        border: none;
        border-radius: 5px;
        background-color: #333;
        color: #fff;
        cursor: pointer;
    }

    /* Media Queries */
    @media (max-width: 768px) {
        .orange-box {
            width: 90%;
            left: 5%;
            right: 5%;
            top: 120px;
            transform: none;
        }
    }

    @media (max-width: 480px) {
        .orange-box {
            width: 90%;
            left: 5%;
            right: 5%;
            top: 115px;
            transform: none;
            padding: 15px;
        }

        .form-group button {
            width: 100%;
        }
    }
</style>
<div class="orange-box">
    <h3 style="text-align: center;">Contact Form</h3>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible">
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible">
        <strong>{{ $message }}</strong>
    </div>
    @endif

    <form action="{{ route('send.php.mailer.submit') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" placeholder="Enter Full name" name="name" id="name">
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="number" placeholder="number" id="number" name="number">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" placeholder="email" id="email" name="email">
        </div>
        <div class="form-group">
            <label>Subject</label>
            <input type="text" placeholder="Enter Subject" name="subject" id="subject">
        </div>
        <div class="form-group">
            <label>Message</label>
            <textarea placeholder="Enter your message" id="body" name="body"></textarea>
        </div>
        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection
