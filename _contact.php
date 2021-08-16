<?php
if ($_SESSION["ContactPage"] == "contactPage") {
    echo "<section class='container-p overflow-auto mt-4'>";
} else {
    echo "<section class='container-p overflow-auto mt-4 bg-color-1'>";
}
$_SESSION["ContactPage"] == "";
?>
    <div class="float-left tablet-w-33 pt-4 tablet-pb-4">
        <h3 class="text-center tablet-text-left font20 tablet-font24 font-weight-black tablet-pl-2">Contact us</h3>
        <p class="text-center tablet-text-left pl-1 pr-1 pt-1 tablet-pl-2 font13 tablet-font14 lineheight-150">If you have any questions, please contact us directly at: </p>
        <a href="mailto:info@hojuhomeloans.com.au" target="_blank"  class="display-block tablet-pl-2 mt-2">
            <button class="border-2 display-flex align-center justify-spacebetween w-100 max-w-300 tablet-max-w-unset tablet-w-90 pointer hover-to-light-main hover-to-border-main m-auto tablet-m-0">
                <div class="display-flex align-center">
                    <img src="./img/iconMail.svg" alt="icon" class="max-w-50 pr-05 invert"/>
                    <p>info@hojuhomeloans.com.au</p>
                </div>
                <img src="./img/iconArrow.svg" alt="icon" class="max-w-30"/>
            </button>
        </a>
        <a href="tel: 02 8960 2362" target="_blank" class="display-block tablet-pl-2 mt-05">
            <button class="border-2 display-flex align-center justify-spacebetween w-100 max-w-300 tablet-max-w-unset tablet-w-90 pointer hover-to-light-main hover-to-border-main m-auto tablet-m-0">
                <div class="display-flex align-center">
                    <img src="./img/iconPhone.svg" alt="icon" class="max-w-50 pr-05 invert"/>
                    <p>+61 2 8960 2362</p>
                </div>
                <img src="./img/iconArrow.svg" alt="icon" class="max-w-30"/>
            </button>
        </a>
        <p class="text-justify tablet-text-left pl-1 pr-1 pt-2 tablet-pt-3 tablet-pl-2 font13 tablet-font14 lineheight-150">Alternatively, you can complete the form at Contact Us and our friendly staff will contact you at your convenience.</p>
    </div>
    <div class="float-left tablet-w-66 pt-2 tablet-pt-4 pb-4 tablet-pl-3 desktop-pl-8">
        <form class="overflow-auto p-05" name="contactform" onsubmit="return validateForm()" action="./_send.php" method="POST">
            <input type="hidden" name="secret" value="6LfN95sbAAAAABYSacOKKw7gqpMgblyv6RZFFV_H">
            <input type="hidden" name="response" value="g-recaptcha-response">
            <div class="float-left w-100 tablet-w-50 p-05">
                <input class="bg-color-white border-1 p-05 w-100"  placeholder="Name*" type="text" name="name"/>
            </div>
            <div class="float-left w-100 tablet-w-50 p-05">
                <input class="bg-color-white border-1 p-05 w-100"  placeholder="Company" type="text" name="company"/>
            </div>
            <div class="float-left w-100 tablet-w-50 p-05">
                <input class="bg-color-white border-1 p-05 w-100"  placeholder="Email*" type="email" name="email"/>
            </div>
            <div class="float-left w-100 tablet-w-50 p-05">
                <input class="bg-color-white border-1 p-05 w-100"  placeholder="Phone*" type="number" name="mobile"/>
            </div>
            <div class="float-left w-100 p-05">
                <textarea class="bg-color-white border-1 p-05 w-100 min-h-200" placeholder="Your messages*" name="memo"></textarea>
            </div>
            <div class="float-left w-100 p-05">
                <div class="g-recaptcha" data-sitekey="6LfN95sbAAAAABUXLnEbZgoP8LK07xyjhHLAYqHV"></div>
            </div>
            
            <div class="float-left w-100 p-05 display-flex align-center justify-flexend">
                <button type="submit" id="sendEmail" class="bg-color-main color-white w-100 tablet-w-unset min-w-200 min-h-50 pointer hover-to-dark">Send</button>
            </div>
            <!-- recaptcha site: https://www.google.com/recaptcha/admin/site/463180097 -->
        </form>
    </div>
</section>
