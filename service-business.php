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
        <div class="position-relative min-h-450 desktop-min-h-350 bg-color-1 bg3-op">
            <div class="pl-same-with-container centering-child-vertical w-100 z-10 top-13 tablet-top-50">
                <h2 class="font24 tablet-font36 font-weight-bold pl-1 pr-1 tablet-pr-0 tablet-pl-0">Business Loans</h2> 
                <p class="font13 tablet-font15 font-weight-reg lineheight-150 pt-2 tablet-max-w-400 desktop-max-w-500 pl-1 pr-1 tablet-pr-0 tablet-pl-0 text-justify"> 
                    Business loan is one of the most popular ways to help cash flow for business owners. Unlike line of credit or overdraft, a business loan has a loan term to be fully repaid. If your business runs well but need some finance for the shortfall period, we may be able to help you.
                </p>
            </div>
            <img src="./img/banner_service_business.png" alt="Business" class="position-absolute bottom-0 max-w-300 tablet-max-w-500 right-0 mr-same-with-container max-h-300 tablet-max-h-450"/>
        </div>
    </section>
    <!-- End Top Banner -->
    <!-- Start How we approach -->
    <section class="container overflow-auto hide-scrollbar tablet-pt-3  pl-05 pr-05 tablet-pl-0 tablet-pr-0">
        <div class="text-center tablet-float-left pt-3 tablet-pt-1 tablet-pl-2 tablet-text-left tablet-w-33">
            <h3 class="font20 tablet-font24 font-weight-bold lineheight-150 tablet-pr-1">Business Types</h3>
        </div>
        <div class="text-center tablet-float-left p-1 tablet-text-left tablet-w-66 tablet-pr-2">
            <p class="font13 tablet-font15 lineheight-150  text-justify tablet-text-left">Commercial loans are loans to finance or refinance the purchase of commercial properties. Business loans are used by borrowers to run their businesses and to pay for their business expenses including working capital. Borrowers may be able to borrow from $5,000 to $1,000,000. There are 2 types of business loans.</p>
        </div>
    </section>
    <!-- End How we approach -->
    <div class="container border-bottom-1 pt-1 tablet-pt-2"></div>
    <section class="container">
        <div class="overflow-auto p-1 pt-2 tablet-p-0 tablet-pt-3">
            <div class="w-100 tablet-w-50 p-05 float-left position-relative">
                <span id="diff1" class="position-absolute top-minus-5"></span>
                <div class="border-1 text-center p-2 tablet-min-h-300">
                    <p class="font13 tablet-font15 lineheight-150 color-main">Business type <strong class="color-main font-weight-bold">1</strong></p>
                    <p class="font15 tablet-font17 font-weight-bold lineheight-150">Secured business loans</p>
                    <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                    <div class="tablet-min-h-300 pb-1">
                        <p class="pt-1 lineheight-150 text-justify">
                            Secured business loans are financed with either borrowers' commercial or residential properties. As loans are secured by assets, the rates are lower than unsecured business loans. Some lenders call this type of loans as commercial loans.
                        </p>
                    </div>
                    <div class="min-h-300 background-centering" style="background-image: url(./img/banner_service_business_2.jpg);"></div>
                </div>
            </div>
            <div class="w-100 tablet-w-50 p-05 float-left position-relative">
                <span id="diff2" class="position-absolute top-minus-5"></span>
                <div class="border-1 text-center p-2 tablet-min-h-300">
                    <p class="font13 tablet-font15  lineheight-150 color-main">Business type <strong class="color-main font-weight-bold">2</strong></p>
                    <p class="font15 tablet-font17 font-weight-bold lineheight-150">Unsecured business loans</p>
                    <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                    <div class="tablet-min-h-300 pb-1">
                        <p class="pt-1 lineheight-150 text-justify">Unsecured business loans are loans that lenders provide upon assessing the financial position of the business and the borrower's personal credit history. As unsecured loans are exposed to greater risks, the rates are higher than secured loans. </p>
                        <p class="pt-05 lineheight-150 text-justify">Also some lenders allow the loan to be used to purchase existing business including franchise. For this purpose, the lenders tend to require some portion of deposit (usually 50%) to be contributed by the applicants as well as business proposal.</p>
                        <p class="pt-05 lineheight-150 text-justify">Not all lenders offer unsecured business loans as the risk level is higher.</p>
                    </div>
                    <div class="min-h-300 background-centering" style="background-image: url(./img/banner_service_business_3.jpg);"></div>
                </div>
            </div>
        </div>
    </section>
    <?php include("./_contact.php")?>
    <?php include("./_footer.php")?>
    <?php include("./_bottombtns.php")?>
    <script src="./js/_index.js"></script>
</body>
</html> 