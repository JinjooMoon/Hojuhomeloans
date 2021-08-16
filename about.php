<?php
    session_start();
    // echo $_SESSION["MailSent"];
    if ($_SESSION["MailSent"] == "SUCCESS") {
        echo "<script>alert('Your Inquiry has been sent! We will contact you shortly.');</script>";
    }
    $_SESSION["MailSent"] = "";
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
        <div class="position-relative min-h-450 desktop-min-h-350 bg-color-1 bg-about">
            <div class="pl-same-with-container centering-child-vertical w-100 z-10 top-13 tablet-top-50">
                <h2 class="font24 tablet-font36 font-weight-bold pl-1 pr-1 tablet-pr-0 tablet-pl-0">About Hoju Home Loans</h2> 
                <p class="font13 tablet-font15 font-weight-reg lineheight-150 pt-2 tablet-max-w-400 desktop-max-w-500 pl-1 pr-1 tablet-pr-0 tablet-pl-0 text-justify tablet-text-left">Hoju Home Loans is located in Sydney Australia.
                    We provide professional trusted care to our valuable clients. We offer a range of lending services from residential to commercial loans.</p>
            </div>
            <img src="./img/banner_about.png" alt="Staffs" class="position-absolute bottom-0 max-w-300 tablet-max-w-500 right-0 mr-same-with-container"/>
        </div>
    </section>
    <!-- End Top Banner -->
    <!-- Start Products -->
    <section class="container p-1 pt-1 tablet-pt-3 tablet-pl-0 tablet-pr-0">
        <div class="text-center pt-4 tablet-pt-1 tablet-pl-2 tablet-text-left pb-2">
            <h3 class="font20 tablet-font24 font-weight-bold lineheight-150 tablet-pr-1">The services that we provide are</h3>
        </div>
        <div class="overflow-auto tablet-pl-2 tablet-pr-2">
            <a href="./service-home.php" class="c-product display-block float-left w-33 desktop-w-16 p-05">
                <div class="c-border border-1">
                    <div class="bg1 min-h-80 tablet-min-h-100 display-flex align-center justify-center">
                        <img src="./img/about/iconHome.svg" alt="Image" class="max-h-120 tablet-max-h-unset p-0"/>
                    </div>
                    <div class="border-top-1 display-flex align-center justify-center">
                        <p class="pl-1 pr-1 min-h-40 text-center display-flex align-center hover-text pointer font-weight-bold font12 tablet-font14">Home loans</p>
                    </div>
                </div>
            </a>
            <a href="./service-commercial.php" class="c-product display-block float-left w-33 desktop-w-16 p-05">
                <div class="c-border border-1">
                    <div class="bg2 min-h-80 tablet-min-h-100 display-flex align-center justify-center">
                        <img src="./img/about/iconCommercial.svg" alt="Image" class="max-h-120 tablet-max-h-unset p-0"/>
                    </div>
                    <div class="border-top-1 display-flex align-center justify-center">
                        <p class="pl-1 pr-1 min-h-40 text-center display-flex align-center hover-text pointer font-weight-bold font12 tablet-font14">Commercial loans</p>
                    </div>
                </div>
            </a>
            <a href="./service-business.php" class="c-product display-block float-left w-33 desktop-w-16 p-05">
                <div class="c-border border-1">
                    <div class="bg3 min-h-80 tablet-min-h-100 display-flex align-center justify-center">
                        <img src="./img/about/iconBusiness.svg" alt="Image" class="max-h-120 tablet-max-h-unset p-0"/>
                    </div>
                    <div class="border-top-1 display-flex align-center justify-center">
                        <p class="pl-1 pr-1 min-h-40 text-center display-flex align-center hover-text pointer font-weight-bold font12 tablet-font14">Business loans</p>
                    </div>
                </div>
            </a>
            <a href="./service-personal.php" class="c-product display-block float-left w-33 desktop-w-16 p-05">
                <div class="c-border border-1">
                    <div class="bg4 min-h-80 tablet-min-h-100 display-flex align-center justify-center">
                        <img src="./img/about/iconPersonal.svg" alt="Image" class="max-h-120 tablet-max-h-unset p-0 opacity-07"/>
                    </div>
                    <div class="border-top-1 display-flex align-center justify-center">
                        <p class="pl-1 pr-1 min-h-40 text-center display-flex align-center hover-text pointer font-weight-bold font12 tablet-font14">Personal loans</p>
                    </div>
                </div>
            </a>
            <a href="./service-asset.php" class="c-product display-block float-left w-33 desktop-w-16 p-05">
                <div class="c-border border-1">
                    <div class="bg5 min-h-80 tablet-min-h-100 display-flex align-center justify-center">
                        <img src="./img/about/iconAsset.svg" alt="Image" class="max-h-120 tablet-max-h-unset p-0"/>
                    </div>
                    <div class="border-top-1 display-flex align-center justify-center">
                        <p class="pl-1 pr-1 min-h-40 text-center display-flex align-center hover-text pointer font-weight-bold font12 tablet-font14">Asset finance</p>
                    </div>
                </div>
            </a>
            <a href="./service-lmi.php" class="c-product display-block float-left w-33 desktop-w-16 p-05">
                <div class="c-border border-1">
                    <div class="bg6 min-h-80 tablet-min-h-100 display-flex align-center justify-center">
                        <img src="./img/about/iconNoLmi.svg" alt="Image" class="max-h-120 tablet-max-h-unset p-0"/>
                    </div>
                    <div class="border-top-1 display-flex align-center justify-center">
                        <p class="pl-1 pr-1 min-h-40 text-center display-flex align-center hover-text pointer font-weight-bold font12 tablet-font14">NO LMI home loans</p>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <!-- End Products -->
    <!-- Start Why choose us -->
    <section class="container overflow-auto hide-scrollbar tablet-pt-3">
        <div class="text-center tablet-float-left pt-3 tablet-pt-1 tablet-pl-2 tablet-text-left tablet-w-33">
            <h3 class="font20 tablet-font24 font-weight-bold lineheight-150 tablet-pr-1">Why Choose Us?</h3>
        </div>
        <div class="overflow-auto tablet-pr-2 pb-2">
            <div class="overflow-auto p-1 pt-2 tablet-p-0 tablet-pt-1">
                <div class="w-100 tablet-w-33 p-05 float-left position-relative">
                    <div class="border-1 text-center">
                        <p class="lineheight-150 p-2 tablet-min-h-250 text-justify">We provide <strong class="font-weight-bold">face to face in person consultation</strong> at your convenience if you are located in <strong class="font-weight-bold">Sydney</strong>.</p>
                        <img src="./img/banner_about_3.jpg" alt="" class="w-100 min-h-100 bg-color-1 display-block"/>
                    </div>
                </div>
                <div class="w-100 tablet-w-33 p-05 float-left position-relative">
                    <div class="border-1 text-center">
                        <p class="lineheight-150 p-2 tablet-min-h-250 text-justify">The services we provide are <strong class="font-weight-bold">free</strong> unless mentioned in the meeting. We <strong class="font-weight-bold">only charge brokerage fees</strong> for short term loans (including car loans and personal loans) and some types of commercial loans.</p>
                        <img src="./img/banner_about_4.jpg" alt="" class="w-100 min-h-100 bg-color-1 display-block"/>
                    </div>
                </div>
                <div class="w-100 tablet-w-33 p-05 float-left position-relative">
                    <div class="border-1 text-center">
                        <p class="lineheight-150 p-2 tablet-min-h-250 text-justify ">Wherever you are, we can provide consultation and process your application, seamlessly <strong class="font-weight-bold">through email, phone and mail</strong>.</p>
                        <img src="./img/banner_about_2.jpg" alt="" class="w-100 min-h-100 bg-color-1 display-block"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why choose us -->
    <!-- Start How we approach -->
    <section class="container overflow-auto hide-scrollbar tablet-pt-3">
        <div class="text-center tablet-float-left pt-3 tablet-pt-1 tablet-pl-2 tablet-text-left tablet-w-33">
            <h3 class="font20 tablet-font24 font-weight-bold lineheight-150 tablet-pr-1">How do we approach?</h3>
        </div>
        <div class="text-center tablet-float-left p-1 tablet-text-left tablet-w-66 tablet-pr-2">
            <p class="font13 tablet-font15 lineheight-150 text-justify tablet-text-left">We know that every client has different needs. Therefore, our services are tailored to meet the individual needs of our clients. With consultation, we try to find the right solutions for our valuable clients.</p>
        </div>
        <div class="overflow-auto tablet-pl-2 tablet-pr-2 pt-2 pb-2 m-05 ml-1 tablet-ml-0">
            <div class="arrow-steps clearfix overflow-auto">
                <div class="step bg-color-1 w-45 tablet-w-19 float-left mb-05 tablet-mb-0">
                    <div>
                        <p class="font-weight-black pb-05 pt-1">Step 1</p>
                        <div class="border-bottom-main min-w-20 max-w-20 pt-05 mb-05"></div>
                        <p class="font13 tablet-font14 pt-05">Initial conversation</p>
                    </div>
                </div>
                <div class="step bg-color-1 w-45 tablet-w-19 float-left mb-05 tablet-mb-0">
                    <div>
                        <p class="font-weight-black pb-05 pt-1">Step 2</p>
                        <div class="border-bottom-main min-w-20 max-w-20 pt-05 mb-05"></div>
                        <p class="font13 tablet-font14 pt-05">Interview</p>
                    </div>
                </div>
                <div class="step bg-color-1 w-45 tablet-w-19 float-left mb-05 tablet-mb-0">
                    <div>
                        <p class="font-weight-black pb-05 pt-1">Step 3</p>
                        <div class="border-bottom-main min-w-20 max-w-20 pt-05 mb-05"></div>
                        <p class="font13 tablet-font14 pt-05">Loan products analysis</p> 
                    </div>
                </div>
                <div class="step bg-color-1 w-45 tablet-w-19 float-left mb-05 tablet-mb-0">
                    <div>
                        <p class="font-weight-black pb-05 pt-1">Step 4</p>
                        <div class="border-bottom-main min-w-20 max-w-20 pt-05 mb-05"></div>
                        <p class="font13 tablet-font14 pt-05">Products comparison reports</p>
                    </div>
                </div>
                <div class="step bg-color-1 w-45 tablet-w-19 float-left mb-05 tablet-mb-0">
                    <div>
                        <p class="font-weight-black pb-05 pt-1">Step 5</p>
                        <div class="border-bottom-main min-w-20 max-w-20 pt-05 mb-05"></div>
                        <p class="font13 tablet-font14 pt-05">Submit to the lender</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End How we approach -->
    <div class="container border-bottom-1 pt-1 tablet-pt-3"></div>
    <!-- Start ACR -->
    <section class="container overflow-auto hide-scrollbar tablet-pt-3">
        <div class="text-center tablet-float-left pt-3 tablet-pt-1 tablet-pl-2 tablet-text-left tablet-w-33">
            <h3 class="font20 tablet-font24 font-weight-bold lineheight-150 tablet-pr-1">We are an Australian Credit Representative</h3>
        </div>
        <div class="text-center tablet-float-left p-1 text-left tablet-w-66 tablet-pr-2 overflow-auto">
            <p class="font13 tablet-font15 lineheight-150 text-justify tablet-text-left">Hoju Home Loans is authorised to act as a Credit Representative of Vow Financial Pty Limited <strong class="font-weight-bold">(Australian Credit Licence Number: 390261)</strong> with authority to provide Credit Services other than as a Credit Provider.</p>
            <p class="font13 tablet-font15 lineheight-150 pt-1 pb-2 text-center tablet-text-left"> Hoju Home Loans is a member of:</p>
            <div class="float-left w-100 tablet-w-33 text-center p-1 tablet-p-0">
                <div class="min-h-70 display-flex align-center justify-center">
                    <img src="./img/about/logo_fbaa.png"/>
                </div>
                <p class="pt-1 font13 tablet-font14 lineheight-150 pl-05 pr-05">The Finance Brokers Association of Australia</p>
            </div>
            <div class="float-left w-100 tablet-w-33 text-center p-1 tablet-p-0">
                <div class="min-h-70 display-flex align-center justify-center">
                    <img src="./img/about/logo_afca.png"/>
                </div>
                <p class="pt-1 font13 tablet-font14 lineheight-150 pl-05 pr-05">Australian Financial Complaints Authority</p>
            </div>
            <div class="float-left w-100 tablet-w-33 text-center p-1 tablet-p-0">
                <div class="min-h-70 display-flex align-center justify-center">
                    <img src="./img/about/logo_vow.png"/>
                </div>
                <p class="pt-1 font13 tablet-font14 lineheight-150 pl-05 pr-05">Vow Financial Pty Ltd</p>
            </div>
        </div>
    </section>
    <!-- End ACR -->
    <?php include("./_contact.php")?>
    <?php include("./_footer.php")?>
    <?php include("./_bottombtns.php")?>
    <script src="./js/_index.js"></script>
</body>
</html> 