@extends('main.master.master')
@section('content')
    <div class="page-title-area item-bg-1">
        <div class="container">
            <div class="page-title-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <h1>Self Drive Locations</h1>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li class="active">Self Drive Locations</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="blog-area pb-60 pt-60">
        <div class="container">
            <h2>Self Drive Locations</h2>
            <p>We provide self-drive car rentals in different regions of North India. Book car on rent in Bhopal.<br></p>			<div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <a href="/bhopal">
                            <img src="/images/delhi4.jpg" alt="Delhi"/>
                            <div class="blog-content">
                                <ul>
                                    <li>JABALPUR Self Drive Cars</li>
                                </ul>
                                <h3>JABALPUR</h3>
                                <span class="read-more">Book Now<i class='bx bx-right-arrow-alt'></i></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <a href="/self-drive-locations">
                            <img src="/images/chandigarh4.jpg" alt="Chandigarh"/>
                            <div class="blog-content">
                                <ul>
                                    <li>Bhopal Self Drive Car</li>								</ul>
                                <h3>Bhopal</h3>
                                <span class="read-more">Book Now<i class='bx bx-right-arrow-alt'></i></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <a href="/self-drive-locations">
                            <img src="/images/punjab2.jpg" alt="Punjab"/>
                            <div class="blog-content">
                                <ul>
                                    <li>Indore Self Drive Cars</li>								</ul>
                                <h3>Indore</h3>
                                <span class="read-more">Book Now<i class='bx bx-right-arrow-alt'></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
