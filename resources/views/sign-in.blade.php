@extends('master')
@section('title', 'Sign In')
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
</style>

<div class="orange-box">
    <form action="{{route('userLogin')}}" method="post" class="form-horizontal" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Email Id</label>
            <input type="text" placeholder="Enter Email Id" name="email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="Password" id="password" name="password">
        </div>
        <div class="form-group">
            <button type="submit">Sign In</button>
        </div>

    </form>
</div>

@endsection