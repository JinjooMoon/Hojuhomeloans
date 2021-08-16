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
        <div class="position-relative min-h-450 desktop-min-h-350 bg-service">
            <div class="pl-same-with-container centering-child-vertical w-100 z-10 top-13 tablet-top-50">
                <h2 class="font24 tablet-font36 font-weight-bold pl-1 pr-1 tablet-pr-0 tablet-pl-0">Services</h2> 
                <p class="font13 tablet-font15 font-weight-reg lineheight-150 pt-2 tablet-max-w-400 desktop-max-w-500 pl-1 pr-1 tablet-pr-0 tablet-pl-0 text-justify"> 
                Service is at the heart of Hoju Home Loans and we treat every single customer valuable and do our best to help, with passion and professionalism. 
                </p>
            </div>
            <img src="./img/banner_service_2.png" alt="" class="position-absolute bottom-0 max-w-400 tablet-max-w-600 right-0 mr-same-with-container max-h-300 tablet-max-h-450 image-rendering"/>
        </div>
    </section>
    <!-- End Top Banner -->
    <!-- Start About -->
    <section class="container overflow-auto hide-scrollbar tablet-pt-3">
        <div class="text-center tablet-float-left pt-4 tablet-pt-1 tablet-pl-2 tablet-text-left tablet-w-33">
            <h3 class="font20 tablet-font24 font-weight-bold lineheight-150 tablet-pr-1">Services We Provide</h3>
        </div>
        <div class="text-center tablet-float-left p-1 tablet-text-left tablet-w-66 tablet-pr-2">
            <p class="font13 tablet-font15 lineheight-150 text-justify pl-05 pr-05 tablet-pl-0 tablet-pr-0">We understand that every customer has a different financial need, distinct to others based on their circumstances. Hoju Home Loans is here to help you find the most appropriate product that best caters to your requirements. Whatever your financial needs are, from looking for a new home, investing, renovating, refinancing to building a new home, you can trust in us to guide you to the right product. We will provide you with the expertise, give you the peace of mind and help you through the loan application process as seamlessly as possible. </p>
            <p class="font13 tablet-font15 lineheight-150 pt-1 font-weight-bold">The services Hoju Home Loans provide are:</p>        
        </div>
    </section>
    <!-- End About -->
    <!-- Start Products -->
    <section class="container p-1 tablet-pl-0 tablet-pr-0">
        <div class="overflow-auto">
            <a href="./service-home.php" class="c-product float-left w-100 tablet-w-33 p-05">
                <div class="c-border border-1">
                    <div class="bg1 min-h-100 tablet-min-h-150 desktop-min-h-130 display-flex align-center justify-center">
                        <img src="./img/illustHome.svg" alt="Image" class="max-h-120 p-1 tablet-max-h-unset p-0"/>
                    </div>
                    <div class="border-top-1 display-flex align-center justify-center tablet-justify-spacebetween">
                        <div class="w-100">
                            <p class="pl-1 pr-1 min-h-50 text-center tablet-text-left display-flex align-center hover-text pointer font-weight-bold font13 tablet-font14 justify-center">Home loans</p>
                            <p class="pl-1 pr-1 tablet-min-h-120 overflow-hidden display-flex pointer font13 tablet-font14 lineheight-150 text-justify tablet-text-center justify-center pb-2 tablet-pb-0">Loans for purchasing a home such as first home buyer, owner occupied property, investment property, off the plan, construction.</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="./service-commercial.php" class="c-product float-left w-100 tablet-w-33 p-05">
                <div class="c-border border-1">
                    <div class="bg2 min-h-100 tablet-min-h-150 desktop-min-h-130 display-flex align-center justify-center">
                        <img src="./img/illustCommercial.svg" alt="Image" class="max-h-120 p-1 tablet-max-h-unset p-0"/>
                    </div>
                    <div class="border-top-1 display-flex align-center justify-center tablet-justify-spacebetween">
                        <div class="w-100">
                            <p class="pl-1 pr-1 min-h-50 text-center tablet-text-left display-flex align-center hover-text pointer font-weight-bold font13 tablet-font14 justify-center">Commercial loans</p>
                            <p class="pl-1 pr-1 tablet-min-h-120 overflow-hidden display-flex pointer font13 tablet-font14 lineheight-150 text-justify tablet-text-center justify-center pb-2 tablet-pb-0">Loans to purchase or refinance commercial properties or cash out funds from commercial equities.</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="./service-business.php" class="c-product float-left w-100 tablet-w-33 p-05">
                <div class="c-border border-1">
                    <div class="bg3 min-h-100 tablet-min-h-150 desktop-min-h-130 display-flex align-center justify-center">
                        <img src="./img/illustBusiness.svg" alt="Image" class="max-h-120 p-1 tablet-max-h-unset p-0"/>
                    </div>
                    <div class="border-top-1 display-flex align-center justify-center tablet-justify-spacebetween">
                        <div class="w-100">
                            <p class="pl-1 pr-1 min-h-50 text-center tablet-text-left display-flex align-center hover-text pointer font-weight-bold font13 tablet-font14 justify-center">Business loans</p>
                            <p class="pl-1 pr-1 tablet-min-h-120 overflow-hidden display-flex pointer font13 tablet-font14 lineheight-150 text-justify tablet-text-center justify-center pb-2 tablet-pb-0">Secured or unsecured business loans to pay for business expenses.</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="./service-personal.php" class="c-product float-left w-100 tablet-w-33 p-05">
                <div class="c-border border-1">
                    <div class="bg4 min-h-100 tablet-min-h-150 desktop-min-h-130 display-flex align-center justify-center">
                        <img src="./img/illustPersonal.svg" alt="Image" class="max-h-120 p-1 tablet-max-h-unset p-0 opacity-07"/>
                    </div>
                    <div class="border-top-1 display-flex align-center justify-center tablet-justify-spacebetween">
                        <div class="w-100">
                            <p class="pl-1 pr-1 min-h-50 text-center tablet-text-left display-flex align-center hover-text pointer font-weight-bold font13 tablet-font14 justify-center">Personal loans</p>
                            <p class="pl-1 pr-1 tablet-min-h-120 overflow-hidden display-flex pointer font13 tablet-font14 lineheight-150 text-justify tablet-text-center justify-center pb-2 tablet-pb-0">Loans such as debt consolidation, home renovation, investment normally up to $50,000.</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="./service-asset.php" class="c-product float-left w-100 tablet-w-33 p-05">
                <div class="c-border border-1">
                    <div class="bg5 min-h-100 tablet-min-h-150 desktop-min-h-130 display-flex align-center justify-center">
                        <img src="./img/illustFinance.svg" alt="Image" class="max-h-120 p-1 tablet-max-h-unset p-0"/>
                    </div>
                    <div class="border-top-1 display-flex align-center justify-center tablet-justify-spacebetween">
                        <div class="w-100">
                            <p class="pl-1 pr-1 min-h-50 text-center tablet-text-left display-flex align-center hover-text pointer font-weight-bold font13 tablet-font14 justify-center">Asset finance</p>
                            <p class="pl-1 pr-1 tablet-min-h-120 overflow-hidden display-flex pointer font13 tablet-font14 lineheight-150 text-justify tablet-text-center justify-center pb-2 tablet-pb-0">Loans to finance a new or used car.</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="./service-lmi.php" class="c-product float-left w-100 tablet-w-33 p-05">
                <div class="c-border border-1">
                    <div class="bg6 min-h-100 tablet-min-h-150 desktop-min-h-130 display-flex align-center justify-center">
                        <img src="./img/illustNoLmi.svg" alt="Image" class="max-h-120 p-1 tablet-max-h-unset p-0"/>
                    </div>
                    <div class="border-top-1 display-flex align-center justify-center tablet-justify-spacebetween">
                        <div class="w-100">
                            <p class="pl-1 pr-1 min-h-50 text-center tablet-text-left display-flex align-center hover-text pointer font-weight-bold font13 tablet-font14 justify-center">NO LMI home loans</p>
                            <p class="pl-1 pr-1 tablet-min-h-120 overflow-hidden display-flex pointer font13 tablet-font14 lineheight-150 text-justify tablet-text-center justify-center pb-2 tablet-pb-0">No LMI between 80% and 90% LVR for specific professionals.</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <!-- End Products -->
    <!-- Start -->
    <section class="container pt-2 overflow-auto">
        <div class="p-1 tablet-p-05 float-left position-relative w-100">
            <div class="text-center p-2 bg-color-main-op-01">
                <p class="font13 tablet-font15 font-weight-bold lineheight-150">Note</p>
                <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                <p class="pt-1 lineheight-150 text-justify tablet-text-center tablet-w-80 m-auto">If you are unsure what loans you require, simply call or email us and we can provide you with a personal consultation.</p>
            </div>
        </div>
    </section>
    <!-- End -->
    <?php include("./_contact.php")?>
    <?php include("./_footer.php")?>
    <?php include("./_bottombtns.php")?>
    <script src="./js/_index.js"></script>
</body>
</html> 