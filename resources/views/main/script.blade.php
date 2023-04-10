

<script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "AutoRental",
            "name": "Self Drive Cars in Delhi | Chandigarh | Punjab - Car Rental",
            "image": "theme/images/logo-200x200.jpg",
            "logo": "theme/images/logo-200x200.jpg",
            "description": "Car Rental is a car rental company offers self drive cars. Rent a Luxury, MUV/SUV, and 4x4 SUV for self drive Cars. Hire Thar Isuzu Fortuner Endeavour Audi etc",
            "@id": "",
            "url": "",
            "telephone": "09999138181",
            "priceRange": "Rs.1500 - 5000",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Gurudwara road, Karol Bagh",
                "addressRegion": "New Delhi,",
                "postalCode": "110005",
                "streetAddress": "Padam Singh Rd",
                "addressCountry": "IN"
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.8",
                "reviewCount": "61"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "28.6471993",
                "longitude": "77.1923966"
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday",
                    "Sunday"
                ],
                "opens": "00:00",
                "closes": "23:59"
            },
            "sameAs": [
                "https://www.facebook.com/",
                "https://twitter.com/",
                "https://www.instagram.com/",
                "https://in.pinterest.com/"
            ]
        }
    </script>
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="theme/js/jquery.min.js"></script>
<script src="theme/js/bootstrap.bundle.min.js"></script>
<script src="theme/js/meanmenu.min.js"></script>
<script src="theme/js/wow.min.js"></script>
<script src="theme/js/owl.carousel.min.js"></script>
<script src="theme/js/magnific-popup.min.js"></script>
<script src="theme/js/nice-select.min.js"></script>
<script src="theme/js/appear.min.js"></script>
<script src="theme/js/odometer.min.js"></script>
<script src="theme/js/jarallax.min.js"></script>
<script src="theme/js/ajaxchimp.min.js"></script>
<script src="theme/js/form-validator.min.js"></script>
<script src="theme/js/contact-form-script.js"></script>
<script src="theme/js/custom.js"></script>
<script src="theme/js/bootstrap-datepicker.js"></script>
<script>
    $('#carouselExampleIndicators').carousel({
        interval: 2500
    });
</script>
<script>
    if (top.location != location) {
        top.location.href = document.location.href;
    }
    $(function() {
        window.prettyPrint && prettyPrint();
        $('#dp1').datepicker({
            format: 'mm-dd-yyyy'
        });
        $('#dp2').datepicker();
        $('#dp3').datepicker();
        $('#dp3').datepicker();
        $('#dpYears').datepicker();
        $('#dpMonths').datepicker();


        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
            onRender: function(date) {
                return date.valueOf() < now.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function(ev) {
            if (ev.date.valueOf() > checkout.date.valueOf()) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() + 1);
                checkout.setValue(newDate);
            }
            checkin.hide();
            $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
            onRender: function(date) {
                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function(ev) {
            checkout.hide();
        }).data('datepicker');
    });
</script>

