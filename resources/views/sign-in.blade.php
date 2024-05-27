@extends('master')
@section('title', 'Sign In')
@section('content')
<!--SignUp and SignIn -->
<div class="form">
        <form action="SignIn.php" name="myform" onsubmit="return ValidateForm()" method="post">
            <h4 class="title">Sign In</h4>
            <div class="single-form">
                <label>User Name</label>
                <input type="text" placeholder="Please write Username" name="username">
                <i class='bx bxs-user'></i>
            </div>
            <div class="single-form">
                <label>Password</label>
                <input type="password" placeholder="Please write password" name="pass">
                <i class='bx bx-key'></i>
            </div>
            <input type="submit" value="Sign In" name="login">
        </form>
    </div>
@endsection