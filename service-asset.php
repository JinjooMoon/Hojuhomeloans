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
        <div class="position-relative min-h-450 desktop-min-h-400 bg-color-1 bg5-op">
            <div class="pl-same-with-container centering-child-vertical w-100 z-10 top-13 tablet-top-50">
                <h2 class="font24 tablet-font36 font-weight-bold pl-1 pr-1 tablet-pr-0 tablet-pl-0">Asset Finance</h2> 
                <p class="font13 tablet-font15 font-weight-reg lineheight-150 pt-2 tablet-max-w-400 desktop-max-w-500 pl-1 pr-1 tablet-pr-0 tablet-pl-0 text-justify">
                    If you are looking to purchase a vehicle, machinery or equipment but do not have the cash to pay in full, there are several financing options that you can consider, namely Hire Purchase, Finance Lease and Chattel Mortgage. The information below outlines the benefits and differences across these options. Whatever individuals or business needs, Hoju Home Loans can assist you and provide professional solutions that can be customised to suit your requirements.
                </p>
            </div>
            <img src="./img/banner_service_asset.png" alt="Buildings" class="position-absolute bottom-0 max-w-300 tablet-max-w-500 right-0 mr-same-with-container max-h-300 tablet-max-h-450"/>
        </div>
    </section>
    <!-- End Top Banner -->
    <!-- Start Hire -->
    <section class="container overflow-auto hide-scrollbar tablet-pt-3 pb-2">
        <div class="text-center tablet-float-left pt-3 tablet-pt-1 tablet-pl-2 tablet-text-left tablet-w-33 pl-05 pr-05 tablet-pr-0">
            <h3 class="font20 tablet-font24 font-weight-bold lineheight-150 tablet-pr-1 pl-1 pr-1 tablet-pl-0">1. Hire Purchase</h3>
            <p class="font13 tablet-font15 lineheight-150 pt-1 tablet-w-80 pl-1 pr-1 tablet-pl-0 text-justify">Under a commercial hire purchase arrangement, lender agrees to purchase the asset or equipment on behalf of the client and then hire it back to the client over the agreed period of time.</p>
            <p class="font13 tablet-font15 lineheight-150 pt-05 tablet-w-80 pl-1 pr-1 tablet-pl-0 text-justify">The client has the use of the asset during the term of the contract but is not the owner of the asset. The instalment includes the principal amount of the asset and interest. At the end of the contract term when the total price of the asset (less any residual) and the interest charges have been paid in full, the client takes ownership of the asset.</p>
        </div>
        <div class="text-center tablet-float-left p-1 tablet-text-left tablet-w-66 tablet-pr-2 overflow-auto">
            <p class="font13 tablet-font15 lineheight-150 font-weight-bold pt-1 pl-05 pr-05">Benefits:</p>
            <div class="p-05 overflow-auto">
                <a class="float-left w-100 hover-to-light-main">
                    <div class="border-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer">
                        <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                        <p class="text-left two-lines pointer">Flexible contract terms between 24 and 60 months</p>
                    </div>
                </a>
                <a class="float-left w-100 hover-to-light-main">
                    <div class="border-left-1 border-bottom-1 border-right-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer pointer">
                        <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                        <p class="text-left two-lines pointer">Residual value (balloon or final instalment) may be placed on contract</p>
                    </div>
                </a>
                <a class="float-left w-100 hover-to-light-main">
                    <div class="border-right-1 border-bottom-1 border-left-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer">
                        <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                        <p class="text-left two-lines pointer">Fixed interest rate</p>
                    </div>
                </a>
                <a class="float-left w-100 hover-to-light-main">
                    <div class="border-left-1 border-right-1 border-bottom-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer">
                        <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                        <p class="text-left two-lines pointer">Monthly repayment is fixed</p>
                    </div>
                </a>
                <a class="float-left w-100 hover-to-light-main">
                    <div class="border-right-1 border-bottom-1 border-left-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer">
                        <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                        <p class="text-left two-lines pointer">Costs are known in advance</p>
                    </div>
                </a>
                <a class="float-left w-100 hover-to-light-main">
                    <div class="border-right-1 border-bottom-1 border-left-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer">
                        <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                        <p class="text-left two-lines pointer">Deposit (either cash or trade-in) may be used</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="tablet-float-left tablet-w-100 overflow-auto p-1 pt-2 tablet-p-0 tablet-pt-1">
            <div class="w-100 tablet-w-50 p-05 float-left position-relative">
                <div class="border-1 text-center p-2 min-h-250 background-centering" style="background-image: url(./img/banner_service_asset_3.jpg);"></div>
            </div>
            <div class="w-100 tablet-w-50 p-05 float-left position-relative">
                <div class="border-1 text-center p-2 min-h-250 background-centering" style="background-image: url(./img/banner_service_asset_6.jpg);"></div>
            </div>
        </div>
    </section>
    <!-- End Hire -->
    <div class="container border-bottom-1 pt-1 tablet-pt-2"></div>
    <!-- Start lease -->
    <section class="container overflow-auto hide-scrollbar tablet-pt-3">
        <div class="text-center tablet-float-left pt-3 tablet-pt-1 tablet-pl-2 tablet-text-left tablet-w-33">
            <h3 class="font20 tablet-font24 font-weight-bold lineheight-150 tablet-pr-1">2. Finance Lease</h3>
        </div>
        <div class="text-center tablet-float-left p-1 tablet-text-left tablet-w-66 tablet-pr-2 pl-05 pr-05 tablet-pr-0">
            <p class="font13 tablet-font15 lineheight-150 text-justify pl-1 pr-1 tablet-p-0">Finance lease is an agreement between the lessor (lender) and lessee (borrower) whereby the lessee makes periodic lease rental payments to the lessor in exchange for using the lessor’s assets. The lessor legally owns the asset for the whole lease term while the lessee has the right to use the asset and takes on the risks involved in the economic ownership of the asset.</p>
            <p class="font13 tablet-font15 lineheight-150 font-weight-bold pt-1 pl-1 pr-1 tablet-pl-0 tablet-pr-1">The differences between Hire Purchase and Finance Lease:</p>
        </div>
        <div class="overflow-auto tablet-pl-2 tablet-pr-2 pb-2">
            <div class="overflow-auto p-1 pt-2 tablet-p-0 tablet-pt-1">
                <div class="w-100 tablet-w-50 p-05 float-left position-relative">
                    <span class="position-absolute top-minus-5"></span>
                    <div class="border-1 text-center p-2 tablet-min-h-250">
                        <p class="font15 tablet-font17 font-weight-bold lineheight-150">Relationship in Agreement</p>
                        <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                        <p class="pt-1 lineheight-150 text-justify">In hire purchase, the parties are owner and hirer, whereas, in finance lease, the parties are called lessor and lessee.</p>
                    </div>
                </div>
                <div class="w-100 tablet-w-50 p-05 float-left position-relative">
                    <span class="position-absolute top-minus-5"></span>
                    <div class="border-1 text-center p-2 tablet-min-h-250">
                        <p class="font15 tablet-font17 font-weight-bold lineheight-150">Ownership Transfer</p>
                        <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                        <p class="pt-1 lineheight-150 text-justify">In hire purchase agreement, the ownership is transferred to the hirer after the final instalment is completed. Whereas, in finance lease, the lessee may have the option to own the asset by paying extra money. Therefore, ownership may not be transferred.</p>
                    </div>
                </div>
                <div class="w-100 tablet-w-50 p-05 float-left position-relative">
                    <span class="position-absolute top-minus-5"></span>
                    <div class="border-1 text-center p-2 tablet-min-h-250">
                        <p class="font15 tablet-font17 font-weight-bold lineheight-150">Depreciation Benefit</p>
                        <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                        <p class="pt-1 lineheight-150 text-justify">In finance lease, the lessor (lender) has the depreciation benefit, while in hire purchase, the customer will have the benefit for income tax deduction.</p>
                    </div>
                </div>
                <div class="w-100 tablet-w-50 p-05 float-left position-relative">
                    <span class="position-absolute top-minus-5"></span>
                    <div class="border-1 text-center p-2 tablet-min-h-250">
                        <p class="font15 tablet-font17 font-weight-bold lineheight-150">Duration</p>
                        <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                        <p class="pt-1 lineheight-150 text-justify">The terms of finance lease is generally longer than hire purchase. Generally, assets like land, buildings and properties are used for finance lease. Whereas, vehicles and equipment are usually financed through hire purchase.</p>
                    </div>
                </div>
                <div class="w-100 tablet-w-50 p-05 float-left position-relative">
                    <span class="position-absolute top-minus-5"></span>
                    <div class="border-1 text-center p-2 tablet-min-h-250">
                        <p class="font15 tablet-font17 font-weight-bold lineheight-150">Payment</p>
                        <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                        <p class="pt-1 lineheight-150 text-justify">In a hire purchase, the customer is required to make a down payment and pay off the rest via instalments over a period of time. The instalment includes the principal and interest. In finance lease, the lessee does not need to make any down payment but is only required to make periodic lease rental payments.</p>
                    </div>
                </div>
                <div class="w-100 tablet-w-50 p-05 float-left position-relative">
                    <span class="position-absolute top-minus-5"></span>
                    <div class="border-1 text-center p-2 min-h-250 background-centering" style="background-image: url(./img/banner_service_asset_2.jpg);"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End lease -->
    <div class="container border-bottom-1 pt-1 tablet-pt-2"></div>
    <!-- Start Hire -->
    <section class="container overflow-auto hide-scrollbar tablet-pt-3">
        <div class="text-center tablet-float-left pt-3 tablet-pt-1 tablet-pl-2 tablet-text-left tablet-w-33">
            <h3 class="font20 tablet-font24 font-weight-bold lineheight-150 tablet-pr-1 pl-1 pr-1 tablet-pl-0">3. Chattel Mortgage</h3>
        </div>
        <div class="text-center tablet-float-left p-1 tablet-text-left tablet-w-66 tablet-pr-2 overflow-auto pl-05 pr-05 tablet-pr-0">
            <p class="font13 tablet-font15 lineheight-150 pt-1 pl-1 pr-1 tablet-pl-0 text-justify">A Chattel mortgage is where a finance provider lends the money to purchase asset and the borrower makes regular repayments. It works similarly to a fixed rate home loan. A finance provider uses the borrower’s asset as the security for the loan. The borrower owns the asset but the financier has a mortgage over the security until the loan is fully repaid, including any balloon payment. The borrower can choose to include balloon payment in order to reduce initial repayment amounts or schedule the repayments to pay off the full amount over the term. For the purchase of vehicles, GST is applicable to the purchase price. Therefore, businesses can claim Input Tax Credit if they account for GST on a cash basis.</p>
            <p class="font13 tablet-font15 lineheight-150 font-weight-bold pt-2 pl-05 pr-05">The differences of Chattel Mortgage from Hire Purchase and Finance Lease:</p>
            <!-- <div class="float-left w-100 p-05">
                <div class="bg-color-1 w-100 text-center min-h-100 tablet-min-h-80 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Under a chattel mortgage, the purchaser takes title in the chattel from the time of purchase.</div>
            </div>
            <div class="float-left w-100 p-05">
                <div class="bg-color-1 w-100 text-center min-h-100 tablet-min-h-80 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">In a Hire Purchase and finance lease, the title in the asset remains with the financier and does not transfer until either the option to purchase is exercised by the purchaser, or the final instalment is paid.</div>
            </div>
            <div class="float-left w-100 p-05">
                <div class="bg-color-1 w-100 text-center min-h-100 tablet-min-h-80 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">For chattel mortgage, GST is applicable to the purchase price of the car or equipment and input tax credit can be claimed up front.</div>
            </div> -->
            <div class="w-100 tablet-w-50 p-05 float-left position-relative tablet-pt-1">
                <span class="position-absolute top-minus-5"></span>
                <div class="border-1 text-center p-2 tablet-min-h-300">
                    <p class="font15 tablet-font17 font-weight-bold lineheight-150">Title</p>
                    <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                    <p class="pt-1 lineheight-150 text-justify">Under a chattel mortgage, the purchaser takes title in the chattel from the time of purchase. Whereas, in a Hire Purchase and finance lease, the title in the asset remains with the financier and does not transfer until either the option to purchase is exercised by the purchaser, or the final instalment is paid.</p>
                </div>
            </div>
            <div class="w-100 tablet-w-50 p-05 float-left position-relative tablet-pt-1">
                <span class="position-absolute top-minus-5"></span>
                <div class="border-1 text-center p-2 tablet-min-h-300">
                    <p class="font15 tablet-font17 font-weight-bold lineheight-150">GST</p>
                    <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                    <p class="pt-1 lineheight-150 text-justify">For chattel mortgage, GST is applicable to the purchase price of the car or equipment and input tax credit can be claimed up front.</p>
                </div>
            </div>
        </div>
        <div class="tablet-float-left tablet-w-100 overflow-auto p-1 pt-2 tablet-p-0 tablet-pt-1">
            <div class="w-100 tablet-w-50 p-05 float-left position-relative">
                <div class="border-1 text-center p-2 min-h-250 background-centering" style="background-image: url(./img/banner_service_asset_7.jpg);"></div>
            </div>
            <div class="w-100 tablet-w-50 p-05 float-left position-relative">
                <div class="border-1 text-center p-2 min-h-250 background-centering" style="background-image: url(./img/banner_service_asset_8.jpg);"></div>
            </div>
        </div>
    </section>
    <!-- End Hire -->
    <div class="container border-bottom-1 pt-1 tablet-pt-3"></div>
    <!-- Start -->
    <section class="container pt-1 tablet-pt-3 overflow-auto">
        <div class="p-05 float-left position-relative m-1 tablet-m-0">
            <div class="w-100 text-center p-2 bg-color-main-op-01">
                <p class="font13 tablet-font15 font-weight-bold lineheight-150">Note</p>
                <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                <p class="pt-1 lineheight-150 tablet-w-80 m-auto text-justify tablet-text-left">The finance term for most products offered by lenders are usually up to 7 years unless secured with property. </p>
                <p class="pt-05 lineheight-150 tablet-w-80 m-auto text-justify tablet-text-left">The terms and conditions may also differ depending on the industry you are in. </p>
                <p class="pt-05 lineheight-150 tablet-w-80 m-auto text-justify tablet-text-left">As different lenders have different products, promotions and policies, it is advisable to consult your mortgage brokers first for optimal recommendations before contacting the banks directly. </p>
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