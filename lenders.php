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
        <div class="position-relative min-h-450 desktop-min-h-350 bg-color-1 bg-lenders">
            <div class="pl-same-with-container centering-child-vertical w-100 z-10 top-13 tablet-top-50">
                <h2 class="font24 tablet-font36 font-weight-bold pl-1 pr-1 tablet-pr-0 tablet-pl-0">Our Lenders</h2> 
                <p class="font13 tablet-font15 font-weight-reg lineheight-150 pt-2 tablet-max-w-400 desktop-max-w-500 pl-1 pr-1 tablet-pr-0 tablet-pl-0 text-justify">As we have experienced that every client has different needs and situations, we analyse our clients’ purpose and requirements deeply. With this understanding, we try to recommend the most suitable products to suit our clients’ needs.</p>
            </div>
            <img src="./img/banner_lenders.png" alt="Staffs" class="position-absolute bottom-0 max-w-300 tablet-max-w-500 right-0 mr-same-with-container"/>
        </div>
    </section>
    <!-- End Top Banner -->
    <!-- Start ACR -->
    <section class="container overflow-auto hide-scrollbar tablet-pt-3">
        <div class="text-center tablet-float-left pt-3 tablet-pt-1 tablet-pl-2 tablet-text-left tablet-w-33 p-05 tablet-p-0">
            <h3 class="font20 tablet-font24 font-weight-bold lineheight-150 tablet-pr-1">Types of Lenders</h3>
            <p class="font13 tablet-font15 lineheight-150 pt-1 tablet-w-80 pl-1 pr-1 tablet-p-0 tablet-pt-1 text-justify tablet-text-left">Hoju Home Loans have connections with more than 40 lenders in our panel. And some of the lenders are:</p>
        </div>
        <div class="text-center tablet-float-left p-1 tablet-text-left tablet-w-66 tablet-pr-2 overflow-auto">
            <div class="float-left w-50 p-05">
                <div class="bg-color-1 w-100 text-center min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Major banks</div>
            </div>
            <div class="float-left w-50 p-05">
                <div class="bg-color-1 w-100 text-center min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Non-conforming and specialist lenders</div>
            </div>
            <div class="float-left w-50 p-05">
                <div class="bg-color-1 w-100 text-center min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Credit unions</div>
            </div>
            <div class="float-left w-50 p-05">
                <div class="bg-color-1 w-100 text-center min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Regional banks</div>
            </div>
            <div class="float-left w-100 p-05">
                <div class="bg-color-1 w-100 text-center min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Lenders which specialise in specific professions</div>
            </div>
           
        </div>
    </section>
    <!-- End ACR -->
    <!-- Start Our Lenders -->
    <section class="container overflow-auto pt-2 tablet-pt-4">
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
    <script src="./js/_index.js"></script>
</body>
</html> 