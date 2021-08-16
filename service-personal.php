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
    <section class="bg-color-1 min-h-450 desktop-min-h-400 position-relative" >
        <div class="position-relative min-h-450 desktop-min-h-400 bg-color-1 bg4-op">
            <div class="pl-same-with-container centering-child-vertical w-100 z-10 top-13 tablet-top-50">
                <h2 class="font24 tablet-font36 font-weight-bold pl-1 pr-1 tablet-pr-0 tablet-pl-0">Personal Loans</h2> 
                <p class="font13 tablet-font15 font-weight-reg lineheight-150 pt-2 tablet-max-w-400 desktop-max-w-500 pl-1 pr-1 tablet-pr-0 tablet-pl-0 text-justify">
                    Loan products have come a long way and have evolved from the past. As more people are looking for personal loans, lenders these days, offer better and more competitive products to attract customers. Personal loans generally can be a cheaper method to finance than credit cards. Also, the available loan amount (normally up to $50,000) is higher than the credit card limit.
                </p>
            </div>
            <img src="./img/banner_service_personal.png" alt="Asset" class="position-absolute bottom-0 max-w-300 tablet-max-w-500 right-0 mr-same-with-container max-h-300 tablet-max-h-450"/>
        </div>
    </section>
    <!-- End Top Banner -->
    
    
    <!-- Start Difference -->
    <section class="container overflow-auto hide-scrollbar tablet-pt-3">
        <div class="text-center tablet-float-left pt-3 tablet-pt-1 tablet-pl-2 tablet-text-left tablet-w-33 pl-05 pr-05 tablet-pr-0">
            <h3 class="font20 tablet-font24 font-weight-bold lineheight-150 tablet-pr-1 pl-1 pr-1 tablet-pl-0">Factors affecting interest rates</h3>
            <p class="font13 tablet-font15 lineheight-150 pt-1 tablet-w-80 pl-1 pr-1 tablet-pl-0 text-justify tablet-text-left">
            The interest rates vary by lenders as well as some factors such as:
            </p>
        </div>
        <div class="text-center tablet-float-left p-1 tablet-text-left tablet-w-66 tablet-pr-2 overflow-auto">
            <div class="p-05 overflow-auto">
                <a class="float-left w-50 hover-to-light-main">
                    <div class="border-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer">
                        <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                        <p class="text-left two-lines pointer">Borrower's credit rating</p>
                    </div>
                </a>
                <a class="float-left w-50 hover-to-light-main">
                    <div class="border-top-1 border-bottom-1 border-right-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer pointer">
                        <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                        <p class="text-left two-lines pointer">Secured & Unsecured</p>
                    </div>
                </a>
                <a class="float-left w-50 hover-to-light-main">
                    <div class="border-right-1 border-bottom-1 border-left-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer">
                        <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                        <p class="text-left two-lines pointer">Fixed or variable</p>
                    </div>
                </a>
                <a class="float-left w-50 hover-to-light-main">
                    <div class="border-right-1 border-bottom-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer">
                        <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                        <p class="text-left two-lines pointer">Loan term (1 to 7 years)</p>
                    </div>
                </a>
                <a class="float-left w-100 hover-to-light-main">
                    <div class="border-left-1 border-right-1 border-bottom-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer">
                        <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                        <p class="text-left two-lines pointer">Monthly / Setup fee</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- End Difference -->
    <div class="container border-bottom-1 pt-2 tablet-pt-3"></div>
    <!-- Start Acceptable securities -->
    <section class="container overflow-auto hide-scrollbar tablet-pt-3 pb-1">
        <div class="text-center tablet-float-left pt-3 tablet-pt-1 tablet-pl-2 tablet-text-left tablet-w-33 pl-05 pr-05 tablet-pr-0">
            <h3 class="font20 tablet-font24 font-weight-bold lineheight-150 tablet-pr-1">Loan Purpose</h3>
            <p class="font13 tablet-font15 lineheight-150 pt-1 tablet-w-80 pl-1 pr-1 tablet-pl-0 text-justify">
            Lenders accept personal loans if the loan purpose falls under the following categories: 
            </p>
        </div>
        <div class="text-center tablet-float-left p-1 tablet-text-left tablet-w-66 tablet-pr-2 overflow-auto">
            <div class="float-left w-50 tablet-w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Debt consolidation</div>
            </div>
            <div class="float-left w-50 tablet-w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Home renovation</div>
            </div>
            <div class="float-left w-50 tablet-w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Car purchase</div>
            </div>
            <div class="float-left w-50 tablet-w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Holiday/Travel</div>
            </div>
            <div class="float-left w-50 tablet-w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Wedding/Funeral</div>
            </div>
            <div class="float-left w-50 tablet-w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Refinance debt</div>
            </div>
            <div class="float-left w-50 tablet-w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Investment</div>
            </div>
            <div class="float-left w-50 tablet-w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Medical expenses</div>
            </div>
            <div class="float-left w-50 tablet-w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Tax debt</div>
            </div>
            <div class="float-left w-50 tablet-w-50 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Education</div>
            </div>
            <div class="float-left w-100 tablet-w-50 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Furniture/Appliances purchase</div>
            </div>
        </div>
    </section>
    <div class="container border-bottom-1 pt-1 tablet-pt-1"></div>
    <!-- Start -->
    <section class="container pt-1 tablet-pt-3 overflow-auto">
        <div class="p-05 float-left position-relative m-1 tablet-m-0">
            <div class="w-100 text-center p-2 bg-color-main-op-01">
                <p class="font13 tablet-font15 font-weight-bold lineheight-150">Note</p>
                <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                <p class="pt-1 lineheight-150 text-justify tablet-text-left tablet-w-80 m-auto">As usual, most lenders have a stricter income verification policy applied to self-employed borrowers compared to PAYG employees. However, some lenders specialise in self-employed borrowers and may offer attractive rates for qualified borrowers.</p>
            </div>
        </div>
    </section>
    <!-- End -->
    <!-- End Acceptable securities -->
    <div class="w-100 min-h-250 mt-3 background-centering" style="background-image: url(./img/banner_service_personal_2.jpg);"></div>
    <?php include("./_contact.php")?>
    <?php include("./_footer.php")?>
    <?php include("./_bottombtns.php")?>
    <script src="./js/_index.js"></script>
</body>
</html> 