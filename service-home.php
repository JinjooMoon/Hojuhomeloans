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
        <div class="position-relative min-h-450 desktop-min-h-350 bg-color-1 bg1-op">
            <div class="pl-same-with-container centering-child-vertical w-100 z-10 top-13 tablet-top-50">
                <h2 class="font24 tablet-font36 font-weight-bold pl-1 pr-1 tablet-pr-0 tablet-pl-0">Home Loans</h2> 
                <p class="font13 tablet-font15 font-weight-reg lineheight-150 pt-2 tablet-max-w-400 desktop-max-w-500 pl-1 pr-1 tablet-pr-0 tablet-pl-0 text-justify">There are a lot of lenders in the market and they offer hundreds of home loan products. Every single case is different from the others.
                Therefore, each client may need different solutions and we find the right ones that meet the individual needs of our customers.</p>
            </div>
            <img src="./img/banner_service_home.png" alt="Home" class="position-absolute bottom-0 max-w-300 tablet-max-w-500 right-0 mr-same-with-container"/>
        </div>
    </section>
    <!-- End Top Banner -->
    <!-- Start Depending on -->
    <section class="container overflow-auto hide-scrollbar tablet-pt-3">
        <div class="text-center tablet-float-left pt-3 tablet-pt-1 tablet-pl-2 tablet-text-left tablet-w-33 pl-05 pr-05 tablet-pl-0 tablet-pr-0">
            <h3 class="font20 tablet-font24 font-weight-bold lineheight-150 tablet-pr-1">Home Loan Solutions</h3>
            <p class="font13 tablet-font15 lineheight-150 pt-1 tablet-w-80 pl-1 pr-1 tablet-pl-0 text-justify">Depending on customers’ needs such as the ones listed, we provide the most suitable solutions for customers.</p>
        </div>
        <div class="text-center tablet-float-left p-1 tablet-text-left tablet-w-66 tablet-pr-2 overflow-auto">
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Refinance</div>
            </div>
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">First Home Buyer</div>
            </div>
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Off the plan</div>
            </div>
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Land</div>
            </div>
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Construction</div>
            </div>
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Full Doc</div>
            </div>
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Low Doc</div>
            </div>
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Line of Credit</div>
            </div>
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Cash out</div>
            </div>
            <div class="float-left w-50 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Owner Occupied Property</div>
            </div>
            <div class="float-left w-50 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Investment Property</div>
            </div>
            <p class="font13 tablet-font15 lineheight-150 w-100 float-left p-05 pt-2 text-justify">Every single case is different. Therefore, each client may need different solutions to the others. Based on our consultation with the individual customer, their needs analysis and loan products analysis, we find the right solution that best meet the customers’ needs and benefits.</p>
        </div>
        
    </section>
    <!-- End Depending on -->
    <div class="container border-bottom-1 pt-1 tablet-pt-2"></div>
    <!-- Start Home Loans -->
    <section class="container overflow-auto hide-scrollbar tablet-pt-3">
        <div class="text-center tablet-float-left pt-3 pl-05 pr-05 tablet-pt-1 tablet-pl-2 tablet-text-left tablet-w-100">
            <h3 class="font20 tablet-font24 font-weight-bold lineheight-150 tablet-pr-1">Consultation Process</h3>
            <p class="font13 tablet-font15 lineheight-150 pt-1 pl-1 pr-1 tablet-pl-0  text-justify tablet-text-left">Generally, the steps for the consultation and loan application process are as follows:</p>
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
    <!-- End Home Loans -->
    <div class="container border-bottom-1 pt-1 tablet-pt-2"></div>
    <!-- Start General Loan process -->
    <section class="container overflow-auto hide-scrollbar tablet-pt-2">
        <div class="text-center tablet-float-left pt-3 pl-05 pr-05 tablet-pr-0 tablet-pt-1 tablet-pl-2 tablet-text-left tablet-w-100">
            <h3 class="font20 tablet-font24 font-weight-bold lineheight-150 tablet-pr-1">General Loan Application Process</h3>
            <p class="font13 tablet-font15 lineheight-150 pt-1 pl-1 pr-1 tablet-pl-0  text-justify tablet-text-left">Once the preferred lender is selected by the clients, we submit the application form to the lender according to the process below.</p>
        </div>
        <div class="overflow-auto tablet-pl-2 tablet-pr-2 pt-2 pb-2 m-05 ml-1 tablet-ml-0">
            <div class="arrow-steps clearfix overflow-auto">
                <div class="step bg-color-1 w-45 tablet-w-19 float-left mb-05 tablet-mb-0">
                    <div>
                        <p class="font-weight-black pb-05 pt-1">Step 1</p>
                        <div class="border-bottom-main min-w-20 max-w-20 pt-05 mb-05"></div>
                        <p class="font13 tablet-font14 pt-05">Loan submission</p>
                    </div>
                </div>
                <div class="step bg-color-1 w-45 tablet-w-19 float-left mb-05 tablet-mb-0">
                    <div>
                        <p class="font-weight-black pb-05 pt-1">Step 2</p>
                        <div class="border-bottom-main min-w-20 max-w-20 pt-05 mb-05"></div>
                        <p class="font13 tablet-font14 pt-05">Confirmation of the lodgement from lender</p>
                    </div>
                </div>
                <div class="step bg-color-1 w-45 tablet-w-19 float-left mb-05 tablet-mb-0">
                    <div>
                        <p class="font-weight-black pb-05 pt-1">Step 3</p>
                        <div class="border-bottom-main min-w-20 max-w-20 pt-05 mb-05"></div>
                        <p class="font13 tablet-font14 pt-05">Conditional approval</p> 
                    </div>
                </div>
                <div class="step bg-color-1 w-45 tablet-w-19 float-left mb-05 tablet-mb-0">
                    <div>
                        <p class="font-weight-black pb-05 pt-1">Step 4</p>
                        <div class="border-bottom-main min-w-20 max-w-20 pt-05 mb-05"></div>
                        <p class="font13 tablet-font14 pt-05">Unconditional approval</p>
                    </div>
                </div>
                <div class="step bg-color-1 w-45 tablet-w-19 float-left mb-05 tablet-mb-0">
                    <div>
                        <p class="font-weight-black pb-05 pt-1">Step 5</p>
                        <div class="border-bottom-main min-w-20 max-w-20 pt-05 mb-05"></div>
                        <p class="font13 tablet-font14 pt-05">Loan documents</p>
                    </div>
                </div>
                <div class="step bg-color-1 w-45 tablet-w-19 float-left mb-05 tablet-mb-0">
                    <div>
                        <p class="font-weight-black pb-05 pt-1">Step 6</p>
                        <div class="border-bottom-main min-w-20 max-w-20 pt-05 mb-05"></div>
                        <p class="font13 tablet-font14 pt-05">Settlement booked</p>
                    </div>
                </div>
                <div class="step bg-color-1 w-45 tablet-w-19 float-left mb-05 tablet-mb-0">
                    <div>
                        <p class="font-weight-black pb-05 pt-1">Step 7</p>
                        <div class="border-bottom-main min-w-20 max-w-20 pt-05 mb-05"></div>
                        <p class="font13 tablet-font14 pt-05">Settled</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End General Loan process -->
    <div class="container border-bottom-1 pt-1"></div>
    <!-- Start -->
    <section class="container pt-2 pb-1 overflow-auto">
        <div class="p-05 float-left position-relative m-1">
            <div class="text-center p-2 bg-color-main-op-01">
                <p class="font13 tablet-font15 font-weight-bold lineheight-150">Note</p>
                <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                <p class="pt-1 lineheight-150 text-justify tablet-text-left tablet-w-80 m-auto">The loan processing time is dependent on the quality of information provided and complexity of the transaction. Please note that some lenders may have different process to the above steps.</p>
            </div>
        </div>
    </section>
    <!-- End -->
    <div class="w-100 min-h-250 mt-2 background-centering" style="background-image: url(./img/banner_service_home_2.jpeg);"></div>
    <?php include("./_contact.php")?>
    <?php include("./_footer.php")?>
    <?php include("./_bottombtns.php")?>
    <script src="./js/_index.js"></script>
</body>
</html> 