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
        <div class="position-relative min-h-450 desktop-min-h-350 bg-color-1 bg2-op">
            <div class="pl-same-with-container centering-child-vertical w-100 z-10 top-13 tablet-top-50">
                <h2 class="font24 tablet-font36 font-weight-bold pl-1 pr-1 tablet-pr-0 tablet-pl-0">Commercial Loans</h2> 
                <p class="font13 tablet-font15 font-weight-reg lineheight-150 pt-2 tablet-max-w-400 desktop-max-w-500 pl-1 pr-1 tablet-pr-0 tablet-pl-0 text-justify">Most lenders define commercial loans as commercial property loans which allow borrowers to purchase or refinance commercial properties or cash out funds from commercial equities. 
                    Hoju Home Loans offers various loan products to suit borrowers’ needs. 
                    To help your understanding, some features of commercial loans are listed below.</p>
            </div>
            <img src="./img/banner_service_commercial_2.png" alt="Buildings" class="position-absolute bottom-0 max-w-300 tablet-max-w-400 right-0 mr-same-with-container max-h-300 tablet-max-h-450"/>
        </div>
    </section>
    <!-- End Top Banner -->
    <!-- Start Acceptable securities -->
    <section class="container overflow-auto hide-scrollbar tablet-pt-3">
        <div class="text-center tablet-float-left pt-3 tablet-pt-1 tablet-pl-2 tablet-text-left tablet-w-33 pl-05 pr-05 tablet-pr-0">
            <h3 class="font20 tablet-font24 font-weight-bold pl-05 pr-05 lineheight-150 tablet-pr-1 tablet-pl-0">Acceptable Securities for Commercial Loans</h3>
            <p class="font13 tablet-font15 lineheight-150 pt-1 tablet-w-80 pl-1 pr-1 tablet-pl-0 text-justify">Lenders will offer commercial loan rates if borrowers need funding to purchase a commercial property such as:</p>
        </div>
        <div class="text-center tablet-float-left p-1 tablet-text-left tablet-w-66 tablet-pr-2 overflow-auto">
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Offices</div>
            </div>
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Retail outlets</div>
            </div>
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Shopping centres</div>
            </div>
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Industrial sites</div>
            </div>
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Accomodation</div>
            </div>
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Restaurants</div>
            </div>
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Pubs</div>
            </div>
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Childcare centres</div>
            </div>
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Clinics</div>
            </div>
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Factories</div>
            </div>
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Warehouses</div>
            </div>
            <div class="float-left w-33 p-05">
                <div class="bg-color-1 w-100 text-center min-h-60 tablet-min-h-50 display-flex align-center justify-center p-05 font14 tablet-font15 lineheight-150">Mixed use properties</div>
            </div>
        </div>
    </section>
    <!-- End Acceptable securities -->
    <div class="w-100 min-h-250 mt-2 background-centering" style="background-image: url(./img/banner_service_commercial_2.jpg);"></div>
    <!-- Start Difference -->
    <section class="container overflow-auto hide-scrollbar tablet-pt-3">
        <div class="text-center tablet-float-left pt-3 tablet-pt-1 tablet-pl-2 tablet-text-left tablet-w-33 pl-05 pr-05 tablet-pr-0">
            <h3 class="font20 tablet-font24 font-weight-bold lineheight-150 tablet-pr-1 pl-1 pr-1 tablet-pl-0">Differences between
                Commercial Loans over
                Residential Loans</h3>
            <p class="font13 tablet-font15 lineheight-150 pt-1 tablet-w-80 pl-1 pr-1 tablet-pl-0 text-justify">Commercial loans are different from residential loans in many aspects and the key differences are:</p>
            <!-- <p class="font13 tablet-font15 lineheight-150 pt-05 tablet-w-80 pl-1 pr-1 tablet-pl-0">Detailed explanations of the terms are provided below.</p> -->
        </div>
        <div class="text-center tablet-float-left p-1 tablet-text-left tablet-w-66 tablet-pr-2 overflow-auto">
            <div class="p-05 overflow-auto">
                <a href="#diff1" class="float-left pointer w-50 hover-to-light-main pointer-auto">
                    <div class="border-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer">
                        <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                        <p class="text-left two-lines pointer">NO LMI (Lender’s Mortgage Insurance)</p>
                    </div>
                </a>
                <a href="#diff2" class="float-left pointer w-50 hover-to-light-main pointer-auto">
                    <div class="border-top-1 border-bottom-1 border-right-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer pointer">
                        <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                        <p class="text-left two-lines pointer">Lower Borrowing Capacity</p>
                    </div>
                </a>
                <a href="#diff3" class="float-left pointer w-50 hover-to-light-main pointer-auto">
                    <div class="border-right-1 border-bottom-1 border-left-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer">
                        <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                        <p class="text-left two-lines pointer">Higher Interest rate</p>
                    </div>
                </a>
                <a href="#diff4" class="float-left pointer w-50 hover-to-light-main pointer-auto">
                    <div class="border-right-1 border-bottom-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer">
                        <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                        <p class="text-left two-lines pointer">Higher Setup Fees</p>
                    </div>
                </a>
                <a href="#diff5" class="float-left pointer w-50 hover-to-light-main pointer-auto">
                    <div class="border-right-1 border-bottom-1 border-left-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer">
                        <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                        <p class="text-left two-lines pointer">Bank Reviews</p>
                    </div>
                </a>
                <a href="#diff6" class="float-left pointer w-50 hover-to-light-main pointer-auto">
                    <div class="border-right-1 border-bottom-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer">
                        <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                        <p class="text-left two-lines pointer">Shorter Loan Term</p>
                    </div>
                </a>
                <a href="#diff7" class="float-left pointer w-50 hover-to-light-main pointer-auto">
                    <div class="border-right-1 border-bottom-1 border-left-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer">
                        <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                        <p class="text-left two-lines pointer">Loan department</p>
                    </div>
                </a>
                <a href="#diff8" class="float-left pointer w-50 hover-to-light-main pointer-auto">
                    <div class="border-right-1 border-bottom-1 w-100 min-h-70 display-flex align-center p-05 font14 tablet-font15 lineheight-150 pointer">
                        <img src="./img/iconCheckwithCircle.svg" alt="check icon" class="pl-05 pr-1"/>
                        <p class="text-left two-lines pointer">GST</p>
                    </div>
                </a>
            </div>
            <p class="font13 tablet-font15 lineheight-150 font-weight-bold p-05">Detailed explanations of the terms are provided below.</p>
        </div>
    </section>
    <!-- End Difference -->
    <div class="container border-bottom-1 pt-1 tablet-pt-2"></div>
    <section class="container">
        <div class="overflow-auto p-1 pt-2 tablet-p-0 tablet-pt-3">
            <div class="w-100 tablet-w-50 p-05 float-left position-relative">
                <span id="diff1" class="position-absolute top-minus-5"></span>
                <div class="border-1 text-center p-2 tablet-min-h-300">
                    <p class="font15 tablet-font17 font-weight-bold lineheight-150">NO LMI (Lender’s Mortgage Insurance)</p>
                    <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                    <p class="pt-1 lineheight-150 text-justify">Even without having a huge deposit, purchasers are able to purchase residential properties with 5 ~ 20 % deposit with LMI. However, commercial loans do not have LMI which means buyers have to come up with quite a big amount of deposit to apply for loans. Minimum deposits vary from lenders and single security or residential combined securities. With single security, max LVR is between 70% and 75%.</p>
                </div>
            </div>
            <div class="w-100 tablet-w-50 p-05 float-left position-relative">
                <span id="diff2" class="position-absolute top-minus-5"></span>
                <div class="border-1 text-center p-2 tablet-min-h-300">
                    <p class="font15 tablet-font17 font-weight-bold lineheight-150">Lower Borrowing Capacity</p>
                    <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                    <p class="pt-1 lineheight-150 text-justify">As it usually takes some time to have tenants in commercial properties, the bank considers if the properties are occupied or empty, third-party tenants or owner operating business, outgoing fee and etc.
                        As a result, lenders assess commercial loan serviceability at a higher level than residential loans.
                        Therefore, it is recommended to contact your mortgage brokers before purchasing commercial properties as we can give rough price guideline.</p>
                </div>
            </div>
            <div class="w-100 tablet-w-50 p-05 float-left position-relative">
                <span id="diff3" class="position-absolute top-minus-5"></span>
                <div class="border-1 text-center p-2 tablet-min-h-300">
                    <p class="font15 tablet-font17 font-weight-bold lineheight-150">Higher Interest rate</p>
                    <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                    <p class="pt-1 lineheight-150 text-justify">Not like straightforward home loan rates, commercial loan rates are generally higher as banks consider risk factors of the business, the location, the proposed business of the properties. Also, banks check the credit rating of the borrowers to apply to its interest rate. 
                        The commercial loan also offers a variable rate, fixed rate, split rate, principal and interest loan or interest only loan like what residential loan offers.</p>
                </div>
            </div>
            <div class="w-100 tablet-w-50 p-05 float-left position-relative">
                <span id="diff4" class="position-absolute top-minus-5"></span>
                <div class="border-1 text-center p-2 tablet-min-h-300">
                    <p class="font15 tablet-font17 font-weight-bold lineheight-150">Higher Setup Fees</p>
                    <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                    <p class="pt-1 lineheight-150 text-justify">Unlike most home loan applications, most lenders will pass the cost of the valuation fee for commercial loan applications to the borrower. Of course, some home loan lenders may pass valuation fees but the fees are usually cheaper than commercial valuation fees.  In addition to the valuation fee, there are application fees as well as monthly account fees that are usually charged to the borrower.</p>
                </div>
            </div>
            <div class="w-100 tablet-w-50 p-05 float-left position-relative">
                <span id="diff5" class="position-absolute top-minus-5"></span>
                <div class="border-1 text-center p-2 tablet-min-h-250">
                    <p class="font15 tablet-font17 font-weight-bold lineheight-150">Bank Reviews</p>
                    <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                    <p class="pt-1 lineheight-150 text-justify">For large loans (usually over 1 million), lenders may review borrower’s financial status on yearly basis (sometimes quarterly basis) to check if the business is in a good position.</p>
                </div>
            </div>
            <div class="w-100 tablet-w-50 p-05 float-left position-relative">
                <span id="diff6" class="position-absolute top-minus-5"></span>
                <div class="border-1 text-center p-2 tablet-min-h-250">
                    <p class="font15 tablet-font17 font-weight-bold lineheight-150">Shorter Loan Term</p>
                    <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                    <p class="pt-1 lineheight-150 text-justify">Usually, lenders only lend up to 25 years for commercial loan term unless the loan is secured with clients’ residential properties. Some banks only lend for 15 years only.</p>
                </div>
            </div>
            <div class="w-100 tablet-w-50 p-05 float-left position-relative">
                <span id="diff7" class="position-absolute top-minus-5"></span>
                <div class="border-1 text-center p-2 tablet-min-h-350">
                    <p class="font15 tablet-font17 font-weight-bold lineheight-150">Loan department</p>
                    <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                    <p class="pt-1 lineheight-150 text-justify">Usually, when customers apply for commercial loans through brokers, they may need to communicate directly with banks due to their complexity. Also, some banks only accept direct communication with customers after the initial lodgement through brokers.
                        When customers apply for residential loans, commercial loan rate may be applied if loan entities are not personal such as:</p>
                    <p class="mt-05 pl-1 lineheight-150 text-justify tablet-text-left position-relative dot-left">Company titles</p>
                    <p class="mt-05 pl-1 lineheight-150 text-justify tablet-text-left position-relative dot-left">Trust structures with the company as beneficiaries</p>
                    <p class="mt-05 pl-1 lineheight-150 text-justify tablet-text-left position-relative dot-left">Trust structure with the individual as beneficiaries (some lenders apply residential rate)</p>
                </div>
            </div>
            <div class="w-100 tablet-w-50 p-05 float-left position-relative">
                <span id="diff8" class="position-absolute top-minus-5"></span>
                <div class="border-1 text-center p-2 tablet-min-h-350">
                    <p class="font15 tablet-font17 font-weight-bold lineheight-150">GST</p>
                    <div class="m-auto border-bottom-main min-w-20 max-w-20 pt-1"></div>
                    <p class="pt-1 lineheight-150 text-justify">If your business is registered for GST, you may need to pay for the GST portion of the property from your own fund as lenders usually do not fund the GST but you may be able to claim the GST after purchase. This may vary in different cases.</p>
                </div>
            </div>
    </section>
    <?php include("./_contact.php")?>
    <?php include("./_footer.php")?>
    <?php include("./_bottombtns.php")?>
    <script src="./js/_index.js"></script>
</body>
</html> 