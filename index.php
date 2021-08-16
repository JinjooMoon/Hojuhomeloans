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
    <meta name="google-site-verification" content="zlkUA1ck0qgMrNVHe6DrJrF9Y1orCPWkIYR9mlOf-lQ" />
    <title>Hoju Home Loans - Home</title>
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
    <section class="c-banner bg-color-1 min-h-500 tablet-min-h-380 desktop-min-h-500 position-relative" >
        <div class="slide wideTopBannerSlide fade" style="display: block;">
            <a href="about.php">
                <div class="position-realtive slide-img min-h-500 tablet-min-h-380 desktop-min-h-500 bg-color-1 gradation1">
                    <div class="pl-same-with-container centering-child-vertical w-100 z-10 top-13 tablet-top-50">
                        <h2 class="font24 tablet-font30 font-weight-reg pl-1 pr-1 tablet-pr-0 tablet-pl-0">Professional Service</h2>
                        <p class="font36 tablet-font50 font-weight-bold pt-05 pl-1 pr-1 tablet-pr-0 tablet-pl-0">Trusted Care</p>
                        <a href="about.php" class="pt-3 display-block underline pointer font-weight-bold pl-1 pr-1 tablet-pr-0 tablet-pl-0">View more</a>
                    </div>
                    <img src="./img/banner_home.png" alt="Family" class="position-absolute bottom-0 max-w-400 tablet-max-w-600 desktop-max-w-700 right-0 mr-same-with-container"/>
                </div>
            </a>
        </div>
        <!-- <a class="prev" onclick="jumpSlide2(false)">&#10094;</a>
        <a class="next" onclick="jumpSlide2(true)">&#10095;</a> -->
        <a href="http://pf.kakao.com/_pfxhnC" target="_blank" class="display-none tablet-display-block position-absolute bottom-100 right-0 mr-same-with-container pointer">
            <button class="display-flex align-center justify-spacebetween bg-kakaotalk min-h-50 pr-1 pointer">
                <div class="display-flex align-center min-w-250">
                    <img src="./img/iconKatalk.svg" alt="Katalk logo" class="invert"/>
                    <p>Click to chat with Kakao</p>
                </div>
                <img src="./img/iconPlus.svg" alt="Add"/>
            </button>
        </a>
    </section>
    <!-- End Top Banner -->
    <!-- Start Floating Menu -->
    <section class="position-relative">
        <div class="container-p tablet-position-absolute tablet-bottom-50 w-100 tablet-min-h-100">
            <div class="overflow-auto tablet-shadow ">
                <a href="./service-home.php" class="min-h-60 tablet-min-h-100 display-flex align-center justify-center bg-color-white hover-bg-main float-left w-33 tablet-w-16 border-right-1 border-bottom-1 tablet-border-0"><button class="font13 desktop-font17 font-weight-bold pointer">Home loans</button></a>
                <a href="./service-commercial.php" class="min-h-60 tablet-min-h-100 display-flex align-center justify-center bg-color-white hover-bg-main float-left w-33 tablet-w-16 border-right-1 border-bottom-1 tablet-border-0"><button class="font13 desktop-font17 font-weight-bold pointer">Commercial loans</button></a>
                <a href="./service-business.php" class="min-h-60 tablet-min-h-100 display-flex align-center justify-center bg-color-white hover-bg-main float-left w-33 tablet-w-16 border-bottom-1 tablet-border-0"><button class="font13 desktop-font17 font-weight-bold pointer">Business loans</button></a>
                <a href="./service-personal.php" class="min-h-60 tablet-min-h-100 display-flex align-center justify-center bg-color-white hover-bg-main float-left w-33 tablet-w-16 border-right-1 border-bottom-1 tablet-border-0"><button class="font13 desktop-font17 font-weight-bold pointer">Personal loans</button></a>
                <a href="./service-asset.php" class="min-h-60 tablet-min-h-100 display-flex align-center justify-center bg-color-white hover-bg-main float-left w-33 tablet-w-16 border-right-1 border-bottom-1 tablet-border-0"><button class="font13 desktop-font17 font-weight-bold pointer">Asset finance</button></a>
                <a href="./service-lmi.php" class="min-h-60 tablet-min-h-100 display-flex align-center justify-center bg-color-white hover-bg-main float-left w-33 tablet-w-16 border-bottom-1 tablet-border-0"><button class="font13 desktop-font17 font-weight-bold pointer">No LMI home loans</button></a>
            </div>
        </div>
    </section>
    <!-- End Floating Menu -->
    <!-- Start About -->
    <section class="container overflow-auto hide-scrollbar tablet-pt-6">
        <div class="text-center tablet-float-left pt-4 tablet-pt-1 tablet-pl-2 tablet-text-left tablet-w-33">
            <h3 class="font20 tablet-font24 font-weight-black">About Hoju Home Loans</h3>
        </div>
        <div class="text-center tablet-float-left p-1 tablet-text-left tablet-w-66 tablet-pr-2">
            <p class="font13 tablet-font15 lineheight-150  text-justify tablet-text-left">Hoju Home Loans located in <strong class="font-weight-bold">Sydney</strong> provides professional trusted care to its valuable clients. We offer <strong class="font-weight-bold">a wide range of lending services from residential to commercial loans</strong>. We know that every client has different needs. Therefore, our services are tailored to meet the individual needs of our clients. We aim to serve our clients professionally.</p>
        </div>
    </section>
    <!-- End About -->
    <!-- Start Products -->
    <section class="container p-1 pt-3 tablet-pl-0 tablet-pr-0">
        <div class="overflow-auto">
            <a href="./service-home.php" class="c-product float-left w-50 tablet-w-33 p-05">
                <div class="c-border border-1">
                    <div class="bg1 min-h-100 tablet-min-h-150 desktop-min-h-130 display-flex align-center justify-center">
                        <img src="./img/illustHome.svg" alt="Image" class="max-h-120 p-1 tablet-max-h-unset p-0"/>
                    </div>
                    <div class="border-top-1 display-flex align-center justify-center tablet-justify-spacebetween">
                        <p class="pl-1 pr-1 min-h-50 text-center tablet-text-left display-flex align-center hover-text pointer font-weight-bold font13 tablet-font14">Home loans</p>
                        <div class="c-icon-plus min-w-50 min-h-50 display-none tablet-display-block">
                            <img src="./img/iconPlus.svg" alt="" class="min-w-50 min-h-50 p-1"/>
                        </div>
                        
                    </div>
                </div>
            </a>
            <a href="./service-commercial.php" class="c-product float-left w-50 tablet-w-33 p-05">
                <div class="c-border border-1">
                    <div class="bg2 min-h-100 tablet-min-h-150 desktop-min-h-130 display-flex align-center justify-center">
                        <img src="./img/illustCommercial.svg" alt="Image" class="max-h-120 p-1 tablet-max-h-unset p-0"/>
                    </div>
                    <div class="border-top-1 display-flex align-center justify-center tablet-justify-spacebetween">
                        <p class="pl-1 pr-1 min-h-50 text-center tablet-text-left display-flex align-center hover-text pointer font-weight-bold font13 tablet-font14">Commercial loans</p>
                        <div class="c-icon-plus min-w-50 min-h-50 display-none tablet-display-block">
                            <img src="./img/iconPlus.svg" alt="" class="min-w-50 min-h-50 p-1"/>
                        </div>
                        
                    </div>
                </div>
            </a>
            <a href="./service-business.php" class="c-product float-left w-50 tablet-w-33 p-05">
                <div class="c-border border-1">
                    <div class="bg3 min-h-100 tablet-min-h-150 desktop-min-h-130 display-flex align-center justify-center">
                        <img src="./img/illustBusiness.svg" alt="Image" class="max-h-120 p-1 tablet-max-h-unset p-0"/>
                    </div>
                    <div class="border-top-1 display-flex align-center justify-center tablet-justify-spacebetween">
                        <p class="pl-1 pr-1 min-h-50 text-center tablet-text-left display-flex align-center hover-text pointer font-weight-bold font13 tablet-font14">Business loans</p>
                        <div class="c-icon-plus min-w-50 min-h-50 display-none tablet-display-block">
                            <img src="./img/iconPlus.svg" alt="" class="min-w-50 min-h-50 p-1"/>
                        </div>
                        
                    </div>
                </div>
            </a>
            <a href="./service-personal.php" class="c-product float-left w-50 tablet-w-33 p-05">
                <div class="c-border border-1">
                    <div class="bg4 min-h-100 tablet-min-h-150 desktop-min-h-130 display-flex align-center justify-center">
                        <img src="./img/illustPersonal.svg" alt="Image" class="max-h-120 p-1 tablet-max-h-unset p-0 opacity-07"/>
                    </div>
                    <div class="border-top-1 display-flex align-center justify-center tablet-justify-spacebetween">
                        <p class="pl-1 pr-1 min-h-50 text-center tablet-text-left display-flex align-center hover-text pointer font-weight-bold font13 tablet-font14">Personal loans</p>
                        <div class="c-icon-plus min-w-50 min-h-50 display-none tablet-display-block">
                            <img src="./img/iconPlus.svg" alt="" class="min-w-50 min-h-50 p-1"/>
                        </div>
                        
                    </div>
                </div>
            </a>
            <a href="./service-asset.php" class="c-product float-left w-50 tablet-w-33 p-05">
                <div class="c-border border-1">
                    <div class="bg5 min-h-100 tablet-min-h-150 desktop-min-h-130 display-flex align-center justify-center">
                        <img src="./img/illustFinance.svg" alt="Image" class="max-h-120 p-1 tablet-max-h-unset p-0"/>
                    </div>
                    <div class="border-top-1 display-flex align-center justify-center tablet-justify-spacebetween">
                        <p class="pl-1 pr-1 min-h-50 text-center tablet-text-left display-flex align-center hover-text pointer font-weight-bold font13 tablet-font14">Asset finance</p>
                        <div class="c-icon-plus min-w-50 min-h-50 display-none tablet-display-block">
                            <img src="./img/iconPlus.svg" alt="" class="min-w-50 min-h-50 p-1"/>
                        </div>
                        
                    </div>
                </div>
            </a>
            <a href="./service-lmi.php" class="c-product float-left w-50 tablet-w-33 p-05">
                <div class="c-border border-1">
                    <div class="bg6 min-h-100 tablet-min-h-150 desktop-min-h-130 display-flex align-center justify-center">
                        <img src="./img/illustNoLmi.svg" alt="Image" class="max-h-120 p-1 tablet-max-h-unset p-0"/>
                    </div>
                    <div class="border-top-1 display-flex align-center justify-center tablet-justify-spacebetween">
                        <p class="pl-1 pr-1 min-h-50 text-center tablet-text-left display-flex align-center hover-text pointer font-weight-bold font13 tablet-font14">NO LMI home loans</p>
                        <div class="c-icon-plus min-w-50 min-h-50 display-none tablet-display-block">
                            <img src="./img/iconPlus.svg" alt="" class="min-w-50 min-h-50 p-1"/>
                        </div>
                        
                    </div>
                </div>
            </a>
        </div>
    </section>
    <!-- End Products -->
    <!-- Start Why choose us -->
    <section class="bg-color-1 pb-15 tablet-pb-0 tablet-pt-3 overflow-auto mt-3 background-position-leftbottom background-norepeat" style="background-image: url(./img/whyChooseUsBg.png);">
        <div class="container-p">
            <div class="text-center tablet-float-left pt-4 pb-1 tablet-pt-1 tablet-pl-2 tablet-text-left tablet-w-33">
                <h3 class="font20 tablet-font24 font-weight-black">Why Choose Us</h3>
            </div>
            <div class="text-center tablet-float-left p-1 tablet-text-left tablet-w-66 tablet-pr-2 overflow-auto">
                <div class="w-100 tablet-w-50 float-left text-center tablet-min-h-150 text-left border-bottom-1 pb-2 mb-1">
                    <p class="font17 font-weight-bold pt-1 pb-05 tablet-pt-0 text-center tablet-text-left">Expertise</p>
                    <p class="font14 lineheight-150"><span class="lineheight-150 position-relative dot-left pl-1 before-top-6px"></span>Home and Investment Loans</p>
                    <p class="font14 lineheight-150"><span class="lineheight-150 position-relative dot-left pl-1 before-top-6px"></span>Refinance and Debt Consolidation</p>
                    <p class="font14 lineheight-150"><span class="lineheight-150 position-relative dot-left pl-1 before-top-6px"></span>Commercial and Business Loans</p>
                </div>
                <div class="w-100 tablet-w-50 float-left text-center tablet-min-h-150 text-left border-bottom-1 pb-2 mb-1">
                    <p class="font17 font-weight-bold pt-1 pb-05 tablet-pt-0 text-center tablet-text-left">Face to Face Consultation</p>
                    <p class="font14 lineheight-150 desktop-w-80 text-justify tablet-text-left">Provide face to face in person consultation at your convenience if you are located in Sydney.</p>
                </div>
                <div class="w-100 tablet-w-50 float-left text-center tablet-min-h-150 text-left border-bottom-1 tablet-border-0 pb-2 mb-1">
                    <p class="font17 font-weight-bold pt-1 pb-05 tablet-pt-0 text-center tablet-text-left">Trusted Care</p>
                    <p class="font14 lineheight-150 tablet-pr-2 desktop-w-80 text-justify tablet-text-left">We understand every customer’s needs and provide solutions that best suit their requirements.</p>
                </div>
                <div class="w-100 tablet-w-50 float-left text-center tablet-min-h-150 text-left border-bottom-1 tablet-border-0 pb-2 mb-1">
                    <p class="font17 font-weight-bold pt-1 pb-05 tablet-pt-0 text-center tablet-text-left">Australia-wide services</p>
                    <p class="font14 lineheight-150 desktop-w-80 text-justify tablet-text-left">We can process your application including consultation, seamlessly through phone, email and mail.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why choose us -->
    <!-- Start Our Lenders -->
    <section class="container overflow-auto pt-4">
        <h3 class="text-center tablet-text-left font20 tablet-font24 font-weight-black tablet-pl-2">Our Lenders</h3>
        <p class="pl-1 pr-1 pt-1 tablet-pl-2 font14 lineheight-150 text-justify tablet-text-left">Hoju Home Loans have connections with more than 40 lenders in our panel. And some of the lenders are:</p>
        <div class="overflow-auto p-1 tablet-pl-2 tablet-pr-2">
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_commonwealth.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Commonwealth</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_anz.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">ANZ</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_amp.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">AMP</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_banksa.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">BankSA</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_ing.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">ING</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_nab.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">National Australia Bank</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_Westpac.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Westpac</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_citibank.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Citibank</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_stgeorge.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">St.George Bank</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_liberty.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Liberty</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_virgin.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Virgin Money</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_macquarie.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Macquarie Bank</p>
                </div>
            </div>




            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_bankaustralia.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Bank Australia</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_adelaidebank.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Adelaide Bank</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_auswide.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Auswide Bank</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_bankofsydney.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Bank of Sydney</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_militarybank.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Australian Military Bank</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_bankwest.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Bankwest</p>
                </div>
            </div>



            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_beyondbank.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Beyond Bank</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_boq.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Bank of Queensland</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_firstmac.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Firstmac</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_firefighters.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Firefighters Mutual Bank</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_resimac.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Resimac</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_suncorp.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Suncorp</p>
                </div>
            </div>



            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_teachers.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Teachers Mutual Bank</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_thinktank.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Thinktank</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_unibank.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Unibank</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_gateway.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Gateway Bank</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_health.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Health Professionals Bank</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_heritage.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Heritage Bank</p>
                </div>
            </div>



            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_latrobe.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">La Trobe Financial</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_pepper.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">Pepper Money</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_me.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">ME Bank</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_mystate.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">MyState Bank</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_specialist.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">BOQ Specialist</p>
                </div>
            </div>
            <div class="float-left w-33 tablet-w-16 border-bottom-1">
                <div class="p-05 text-center">
                    <div class="min-h-60 max-h-60 display-flex align-center justify-center mt-05">
                        <img src="./img/bank/logo_86400.png" alt="logo" class="image-rendering max-h-60 max-w-90 tablet-max-w-100"/>
                    </div>
                    <p class="mt-05 mb-05 one-line font8 tablet-font13">86 400</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Lenders -->
    <?php include("./_contact.php")?>
    <?php include("./_footer.php")?>
    <?php include("./_bottombtns.php")?>
    <!-- <script src="./js/slide.js"></script> -->
    <script src="./js/_index.js"></script>
</body>
</html> 