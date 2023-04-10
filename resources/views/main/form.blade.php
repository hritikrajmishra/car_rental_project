
<form name="item" method="post" id="contactForm" action="/formData" onsubmit="return validate1();">
    @csrf
    <input type="hidden" name="Tour" value="Maruti Swift Dzire" size="20">
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
    @include('flash_data')
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
        {{--                                   --}}
        <div class="col-lg-6 col-sm-6">
            <button type="submit" class="default-btn btn-two"><span class="label">Submit</span></button>
        </div>
    </div>								</form>



