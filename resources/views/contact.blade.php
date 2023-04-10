@extends('main.master.master')
@section('content')
    <a href="https://wa.me/918720034616??text=Hi, I need a self drive car" style="position:fixed; left:15px; bottom:15px; z-index:999;"><img src="/theme/images/WhatsApp.png" alt="whatsapp"></a>

    <div class="page-title-area item-bg-1">
        <div class="container">
            <div class="page-title-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <h1>Contact us</h1>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="address-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-address">
                    <h3>Delhi</h3>
                    <p><i class='bx bx-map'></i> Chamber no-105, 6/79, W.E.A, Gurudwara road, Karol Bagh, New Delhi-110005, India</p>
                    <p><i class='bx bx-phone-call'></i> <a href="#">+91 9999138181</a></p>
                    <p><i class='bx bx-envelope'></i><a href="#">info@rentmyway.in</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-address">
                    <h3>BHOPAL</h3>
                    <p><i class='bx bx-map'></i> Taxi stand, Near Batra Cinema, Sector - 37B, Bhopal </p>
                    <p><i class='bx bx-phone-call'></i> <a href="#">+91 9999138181</a></p>
                    <p><i class='bx bx-envelope'></i><a href="mailto:info@rentmyway.in">info@rentmyway.in</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-address">
                    <h3>JABALPUR</h3>
                    <p><i class='bx bx-map'></i> #21, Deep Complex, Court Road, damoh naka 482002</p>
                    <p><i class='bx bx-phone-call'></i> <a href="#">+91 9999138181</a></p>
                    <p><i class='bx bx-envelope'></i> <a href="#">info@rentmyway.in</a></p>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="contact-map-area">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7071.226813964374!2d79.88062210015221!3d23.198708202697205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3981b0533fee287f%3A0x1f934b4a2246edc4!2sGlobal%20Engineering%20College!5e0!3m2!1sen!2sin!4v1680834580395!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></iframe>
    </div>
</div>
<section class="contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-md-2">
                <div class="contact-wrap contact-pages mb-0">
                    <div class="contact-form">
                        <div class="section-title">
                            <span class="pumpkin-color">Get In Touch</span>
                            <h2>Drop us a message for any query</h2>
                        </div>
                      @include('main.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
