@extends('main.master.master')
@section('content')


<section class="service-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-details-wrap pl-lg-5">
                    <div class="road-transfort owl-carousel owl-theme">
                        <div class='single-item  active'><img src='/gallery/isuzu1.jpg' alt='Isuzu D-Max V-Cross 4x4'></div><div class='single-item '><img src='/gallery/isuzu-11.jpg' alt='Isuzu D-Max V-Cross 4x4'></div><div class='single-item '><img src='/gallery/isuzu-21.jpg' alt='Isuzu D-Max V-Cross 4x4'></div><div class='single-item '><img src='/gallery/isuzu-31.jpg' alt='Isuzu D-Max V-Cross 4x4'></div><div class='single-item '><img src='/gallery/isuzu-41.jpg' alt='Isuzu D-Max V-Cross 4x4'></div><div class='single-item '><img src='/gallery/isuzu-51.jpg' alt='Isuzu D-Max V-Cross 4x4'></div><div class='single-item '><img src='/gallery/isuzu-61.jpg' alt='Isuzu D-Max V-Cross 4x4'></div>							</div>
                    <div class="content">


                        <!--<div class="sec-title ">-->
                        <!--<div class="">Isuzu Dmax Vcross 4x4 Self Drive Car</div>-->
                        <h3>Isuzu D-Max V-Cross 4x4</h3>
                        <!--</div>-->

                        <div class="text">




                            <p>Rent My Way offers a cost-effective self-drive Isuzu D-Max V-Cross 4x4 car for rent in Delhi/Chandigarh/Punjab without a driver at an affordable cost. We maintain a long-term relationship with our trusted customers and provide the best offers for regular customers and get hot discounts, especially during seasonal holidays. We provide both manual and automatic cars for rent to make your driving simple and secure.</p>

                            <p>The Isuzu D-Max V-Cross 4x4 is a brilliant car and Rent My Way makes sure that the comfort that this car provides does not go unnoticed. Our renting packages are flexible and highly suitable to satisfy customer needs. You can choose a car from our wide range of fleet available to travel outstation or intercity commute. You can plan your journey with a Luxury self-drive Isuzu D-Max V-Cross 4x4 car rental from us. We provide a wide range of luxury cars for rent in Delhi/Chandigarh/Punjab.</p>

                            <h3>Isuzu Dmax Vcross 4x4 Specifications</h3>
                            <p> It is available with Manual and Automatic transmission. Depending upon the variant and fuel type the D-Max V-Cross has a mileage of 12.4 km. The Isuzu D-Max V-Cross has 2 Diesel Engines on offer. The Diesel engine is 2499 cc and 1999 cc. The D-Max V-Cross is a 5 seater Pickup Trucks and has a length of 5295mm, a width of 1860mm, and a wheelbase of 3095mm</p>

                            <h3>Key Specifications</h3>
                            <ul>
                                <li>Fuel Type: Diesel</li>
                                <li>Max Power (bhp@rpm): 147.9bhp</li>
                                <li>Seating Capacity: 5</li>
                                <li>TransmissionType: Automatic</li>
                                <li>Engine Displacement (cc): 1999</li>
                                <li>Fuel Tank Capacity: 76</li>
                            </ul>								</div>
                    </div>
                    <div class="ask-question">
                        <h3>Book Isuzu D-Max V-Cross 4x4</h3>
                        <form name="item" method="get" id="contactForm" action="/tour-booking-mail.php" onsubmit="return validate1();">
                            <input type="hidden" name="Tour" value="Isuzu D-Max V-Cross 4x4" size="20">
                            <script language="Javascript">
                                function validate1()
                                {
                                    var valid = true;
                                    if (document.item.Name.value == "")
                                    {
                                        alert("Please enter Name");
                                        document.item.Name.focus();
                                        return false;
                                    }
                                    if (document.item.Email.value == "")
                                    {
                                        alert("Please enter Email ID");
                                        document.item.Email.focus();
                                        return false;
                                    }
                                    if (document.item.Mobile.value == "")
                                    {
                                        alert("Please enter Mobile No.");
                                        document.item.Mobile.focus();
                                        return false;
                                    }
                                    if (document.item.Pickup.value == "")
                                    {
                                        alert("Please enter Date of Travel");
                                        document.item.Pickup.focus();
                                        return false;
                                    }

                                    if (document.item.Adults.value == "Adults")
                                    {
                                        alert("Please enter the Adults");
                                        document.item.Adults.focus();
                                        return false;
                                    }

                                    if (document.item.letters_code.value == "")
                                    {
                                        alert("Please enter the Characters Shown in Image");
                                        document.item.letters_code.focus();
                                        return false;
                                    }
                                    if (document.layers||document.getElementById||document.all)
                                    {
                                        if (document.item.Email.value != "Your_Email")
                                        {
                                            var str=document.item.Email.value
                                            var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i

                                            if (filter.test(str))
                                                return true;
                                            else
                                            {
                                                alert("Please enter the correct Email");
                                                document.item.Email.focus();
                                                return false;

                                            }
                                        }
                                    }
                                }
                                function CheckKeyCode()
                                {
                                    if( (event.keyCode == 189 || event.keyCode == 109 || event.keyCode == 9 || event.keyCode == 8 || event.keyCode == 190) ||

                                        (event.keyCode >= 48 && event.keyCode <= 57) ||
                                        (event.keyCode >= 96 && event.keyCode <= 105) ) {
                                        return true;
                                    }
                                    else {
                                        return false;

                                    }
                                }
                            </script>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="Name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="Email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="Mobile" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Mobile No">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="Country" class="form-control" required data-error="Please enter your Country" placeholder="your City/Country">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="Pickup" id="dpd1" class="form-control" placeholder="Date(mm/dd/yy)" autocomplete="off"/>
                                        <input type="hidden" name="drop" id="dpd2" class="form-control" placeholder="Date(mm/dd/yy)" autocomplete="off"/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Pick-Up Location" class="form-control" name="Pickuplocation">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="Remarks" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <img src="/captcha-code-file.php" style="float:left; margin-right:5px"/><input type="text" name="letters_code" maxlength="3" class="form-control" placeholder="Confirm Code" style="width:150px" class="pull-right">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <button type="submit" class="default-btn btn-two"><span class="label">Submit</span></button>
                                </div>
                            </div>								</form>
                    </div>
                </div>
                <div class="service-details-wrap pl-lg-5 pb-60 pt-60">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <h3 class="service-details-title">4x4 SUV's Cars</h3>
                        <ul>
                            <li class=''><a href='/4x4-suvs-cars/jeep-wrangler-20l-rubicon-ptl/'><i class='bx bx-check'></i> Jeep Wrangler 2.0L Rubicon Ptl  </a></li><li class=''><a href='/4x4-suvs-cars/toyota-hilux-28l-4x4-mt-diesel/'><i class='bx bx-check'></i> Toyota Hilux 2.8L 4x4 MT Diesel  </a></li><li class=''><a href='/4x4-suvs-cars/mahindra-thar-4wd-convertible-top-mt-diesel/'><i class='bx bx-check'></i> Mahindra Thar 4WD Convertible Top MT Diesel  </a></li><li class=''><a href='/4x4-suvs-cars/new-mahindra-thar-4wd-at-convertible-top/'><i class='bx bx-check'></i> New Mahindra Thar 4WD At Convertible Top  </a></li><li class=''><a href='/4x4-suvs-cars/new-mahindra-thar-4wd-at-hard-top/'><i class='bx bx-check'></i> New Mahindra Thar 4WD At Hard Top  </a></li><li class=''><a href='/4x4-suvs-cars/mahindra-thar-hard-top-4wd-at-ptl/'><i class='bx bx-check'></i> Mahindra Thar Hard Top 4WD AT Ptl  </a></li><li class='current'><a href='/4x4-suvs-cars/isuzu-d-max-v-cross-4x4/'><i class='bx bx-check'></i> Isuzu D-Max V-Cross 4x4  </a></li><li class=''><a href='/4x4-suvs-cars/mahindra-scorpio-n-z8l-4x4-at-7-seater/'><i class='bx bx-check'></i> Mahindra Scorpio N Z8L 4x4 AT 7 Seater  </a></li><li class=''><a href='/4x4-suvs-cars/toyota-fortuner-28l-4x4-at-automatic/'><i class='bx bx-check'></i> Toyota Fortuner 2.8L 4X4 AT Automatic  </a></li><li class=''><a href='/4x4-suvs-cars/ford-endeavour-32l-titanium-plus-4x4-automatic/'><i class='bx bx-check'></i> Ford Endeavour 3.2L Titanium Plus 4X4 Automatic  </a></li>								</ul>
                    </div>
                </div>
                <div class="service-faq service-faq-main">
                    <div class="faq-area">
                        <div class="questions-bg-area">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="faq-accordion">
                                        <ul class="accordion">

                                            <li class="accordion-item">
                                                <a class="accordion-title" href="javascript:void(0)"><span><sub class="bx bx-chevron-down"></sub></span>Budget Cars</a>
                                                <div class="accordion-content">
                                                    <ul><li><a href='/budget-cars/maruti-swift-dzire/'> Maruti Swift Dzire </a></li><li><a href='/budget-cars/maruti-vitara-brezza/'> Maruti Vitara Brezza </a></li><li><a href='/budget-cars/nissan-magnite/'> Nissan Magnite </a></li><li><a href='/budget-cars/kia-seltos-htk-plus-automatic-car/'> Kia Seltos HTK Plus Automatic Car </a></li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="accordion-item">
                                                <a class="accordion-title" href="javascript:void(0)"><span><sub class="bx bx-chevron-down"></sub></span>MUV/SUV Cars</a>
                                                <div class="accordion-content">
                                                    <ul><li><a href='/muv-suv-cars/kia-carnival-premium-8-str/'> Kia Carnival Premium 8 Str </a></li><li><a href='/muv-suv-cars/mahindra-xuv700-ax7-awd-at-diesel/'> Mahindra XUV700 AX7 AWD AT Diesel </a></li><li><a href='/muv-suv-cars/hyundai-venue-s-mt-ptl/'> Hyundai Venue S MT Ptl </a></li><li><a href='/muv-suv-cars/hyundai-creta-ex-mt-diesel/'> Hyundai Creta EX MT Diesel </a></li><li><a href='/muv-suv-cars/mahindra-marazzo/'> Mahindra Marazzo </a></li><li><a href='/muv-suv-cars/toyota-innova-crysta/'> Toyota Innova Crysta </a></li><li><a href='/muv-suv-cars/toyota-innova-crysta-gx-at-7-str-ptl/'> Toyota Innova Crysta GX AT 7 STR PTL </a></li><li><a href='/muv-suv-cars/toyota-innova-crysta-zx-mt-7-str-dsl/'> Toyota Innova Crysta ZX MT 7 STR DSL </a></li><li><a href='/muv-suv-cars/toyota-hilux-28l-4x4-mt-diesel/'> Toyota Hilux 2.8L 4x4 MT Diesel </a></li><li><a href='/muv-suv-cars/mahindra-scorpio-s11/'> Mahindra Scorpio S11 </a></li><li><a href='/muv-suv-cars/toyota-innova-crysta-automatic/'> Toyota Innova Crysta Automatic </a></li><li><a href='/muv-suv-cars/toyota-innova-crysta-at-dsl-8-str/'> Toyota Innova Crysta AT DSL 8 STR </a></li><li><a href='/muv-suv-cars/mahindra-xuv700-ax5-at-diesel/'> Mahindra XUV700 AX5 AT Diesel </a></li><li><a href='/muv-suv-cars/toyota-fortuner-4x2/'> Toyota Fortuner 4x2 </a></li><li><a href='/muv-suv-cars/mahindra-thar/'> New Mahindra Thar 4WD AT Convertible Top </a></li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="accordion-item">
                                                <a class="accordion-title" href="javascript:void(0)"><span><sub class="bx bx-chevron-down"></sub></span>Luxury Cars</a>
                                                <div class="accordion-content">
                                                    <ul><li><a href='/luxury-cars/audi-q2/'> Audi Q2 </a></li><li><a href='/luxury-cars/audi-a6-matrix-edtion-car/'> Audi A6 Matrix Edtion Car </a></li><li><a href='/luxury-cars/audi-q5-45-tfsi-technology/'> Audi Q5 45 TFSI Technology </a></li><li><a href='/luxury-cars/audi-q7-car/'> Audi Q7 Car </a></li><li><a href='/luxury-cars/mercedes-benz-gls-400d-4matic/'> Mercedes-Benz GLS 400D 4MATIC </a></li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="accordion-item">
                                                <a class="accordion-title" href="javascript:void(0)"><span><sub class="bx bx-chevron-down"></sub></span>Self Drive Locations</a>
                                                <div class="accordion-content">
                                                    <ul><li><a href='/self-drive-locations/delhi/'> Delhi </a></li><li><a href='/self-drive-locations/chandigarh/'> Chandigarh </a></li><li><a href='/self-drive-locations/punjab/'> Punjab </a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
