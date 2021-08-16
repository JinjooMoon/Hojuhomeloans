<?php
    session_start();
    if ($_SESSION["MailSent"] == "SUCCESS") {
        echo "<script>alert('Your Inquiry has been sent! We will contact you shortly.');</script>";
    }
    $_SESSION["MailSent"] = "";
    $_SESSION["ContactPage"]= "";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hoju Home Loans - About</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="./img/favicon.png">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    <?php include("./_header.php")?>
    <!-- Start Top Banner -->
    <section class="bg-color-1 min-h-450 desktop-min-h-350 position-relative" >
        <div class="position-relative min-h-450 desktop-min-h-350 bg-color-1 bg6-op">
            <div class="pl-same-with-container centering-child-vertical w-100 z-10 top-13 tablet-top-50">
                <h2 class="font24 tablet-font36 font-weight-bold pl-1 pr-1 tablet-pr-0 tablet-pl-0">No LMI Home Loans</h2> 
                <p class="font13 tablet-font15 font-weight-reg lineheight-150 pt-2 tablet-max-w-400 desktop-max-w-500 pl-1 pr-1 tablet-pr-0 tablet-pl-0 text-justify"> 
                    Some lenders waive the LMI (Lenders Mortgage Insurance) to specific professionals with LVR between 80% and 90%.
                    There are limited lenders offering this great promotion for owner occupied and investment residential property purchases or refinance.
                </p>
            </div>
            <img src="./img/banner_service_lmi.png" alt="Buildings" class="position-absolute bottom-0 max-w-300 tablet-max-w-500 right-0 mr-same-with-container max-h-300 image-rendering"/>
        </div>
    </section>
    <!-- End Top Banner -->
    <!-- Start Acceptable securities -->
    <section class="container overflow-auto hide-scrollbar tablet-pt-3 pb-1">
        <div class="text-center tablet-float-left pt-3 tablet-pt-1 tablet-pl-2 tablet-text-left tablet-w-33 pl-05 pr-05 tablet-pr-0">
            <h3 class="font20 tablet-font24 font-weight-bold lineheight-150 tablet-pr-1">Specific Professionals</h3>
            <p class="font13 tablet-font15 lineheight-150 pt-1 tablet-w-80 pl-1 pr-1 tablet-pl-0  text-justify tablet-text-left">Generally, the professionals that fall under this category are:</p>
        </div>
        <div class="text-center tablet-float-left p-1 tablet-text-left tablet-w-66 tablet-pr-2 overflow-auto">
            <div class="float-left w-50 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Dentists</div>
            </div>
            <div class="float-left w-50 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">General Practitioners</div>
            </div>
            <div class="float-left w-50 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Hospital - employed doctors</div>
            </div>
            <div class="float-left w-50 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Medical Specialists</div>
            </div>
            <div class="float-left w-50 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Optometrists</div>
            </div>
            <div class="float-left w-50 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Pharmacists</div>
            </div>
            <div class="float-left w-50 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Veterinary Practitioners</div>
            </div>
            <div class="float-left w-50 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">other professionals *</div>
            </div>
            <div class="float-left w-100 p-05">
                <p class="font13 lineheight-150 pt-1 text-justify tablet-text-left">* Some lenders may include other professionals such as accounting and legal under this criteria so please check with us. </p>
            </div>
        </div>
    </section>
    <!-- End Acceptable securities -->
    <div class="container border-bottom-1 pt-1 tablet-pt-2"></div>
    <!-- Start Requirements -->
    <section class="container overflow-auto hide-scrollbar tablet-pt-3">
        <div class="text-center tablet-float-left pt-3 tablet-pt-1 tablet-pl-2 tablet-text-left tablet-w-33">
            <h3 class="font20 tablet-font24 font-weight-bold lineheight-150 tablet-pr-1">Criteria</h3>
            <p class="font13 tablet-font15 lineheight-150 pt-1 tablet-w-80 pl-1 pr-1 tablet-pl-0">Some of the requirements are:</p>
            <!-- <p class="font12 tablet-font14 color-666 lineheight-150 pt-1 tablet-w-80 pl-1 pr-1 tablet-pl-0">* Some lenders may include other professionals such as accounting and legal under this criteria so please check with us.</p> -->
            <!-- <p class="font12 tablet-font14 color-666 lineheight-150 pt-05 tablet-w-80 pl-1 pr-1 tablet-pl-0">* However, some lenders may accept other visa types</p> -->
            <!-- <p class="font12 tablet-font14 color-666 lineheight-150 pt-05 tablet-w-80 pl-1 pr-1 tablet-pl-0">* Lenders may change their criteria without any notification, so it is advisable to contract your broker or bankers before lodging your loan.</p> -->
        </div>
        
        <div class="text-center tablet-float-left p-1 tablet-text-left tablet-w-66 tablet-pr-2 overflow-auto">
            <a class="float-left w-100 hover-to-light-main">
                <div class="border-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer">
                    <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                    <p class=" text-justify tablet-text-left pointer">Verification for profession and current registration</p>
                </div>
            </a>
            <a class="float-left w-100 hover-to-light-main">
                <div class="border-left-1 border-bottom-1 border-right-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer pointer">
                    <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                    <p class=" text-justify tablet-text-left pointer">Eligible applicants need to have at least equal ownership interest in the loan property</p>
                </div>
            </a>
            <a class="float-left w-100 hover-to-light-main">
                <div class="border-right-1 border-bottom-1 border-left-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer">
                    <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                    <p class=" text-justify tablet-text-left pointer">All the applicants must be either Australian permanent residents or citizens. However, some lenders may accept other visa types</p>
                </div>
            </a>
            <div class="float-left w-100 p-05">
                <p class="font13 lineheight-150 pt-1 text-justify tablet-text-left">* Lenders may change their criteria without any notification, so it is advisable to contact your broker or bankers before lodging your loan.</p>
            </div>
        </div>
    </section>
    <!-- End Requirements -->
    <div class="w-100 min-h-250 mt-4 background-centering" style="background-image: url(./img/banner_service_lmi_2.jpg);"></div>
    <?php include("./_contact.php")?>
    <?php include("./_footer.php")?>
    <?php include("./_bottombtns.php")?>
    <script src="./js/_index.js"></script>
</body>
</html> 