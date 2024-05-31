@extends('master')
@section('title', 'Reviews')
@section('content')
<!--reviews-->
<section class="reviews" id="reviews">
    <div class="heading">
        <span>Reviews</span>
        <h1>Whats Our Customer Says.......</h1>
    </div>
    <div class="review-container">
        <div class="box">
            <div class="rev-img">
                <img src="assets/images/rev1.jpg" alt="">
            </div>
            <h2>Arvind</h2>
            <div class="stars">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star-half"></i>
            </div>
            <p>Flattered with availability of well maintained cars</p>
        </div>
        <div class="box">
            <div class="rev-img">
                <img src="assets/images/rev2.jpg" alt="">
            </div>
            <h2>Gaurav</h2>
            <div class="stars">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star-half"></i>
            </div>
            <p>Booked a XUV with unlimited kms, very happy with car's service
            <p>
        </div>
        <div class="box">
            <div class="rev-img">
                <img src="assets/images/rev3.jpg" alt="">
            </div>
            <h2>Himanshi </h2>
            <div class="stars">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star-half"></i>
            </div>
            <p>Booked a car for a family trip which was very comfortable and in great condition

            </p>
        </div>
    </div>
</section>
@endsection