<?php
    session_start();
    $_SESSION["ContactPage"] = "contactPage";
    if ($_SESSION["MailSent"] == "SUCCESS") {
        echo "<script>alert('Your Inquiry has been sent! We will contact you shortly.');</script>";
    }
    $_SESSION["MailSent"] = "";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hoju Home Loans - Disclaimer</title>
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
    <section class="bg-color-1 min-h-350 position-relative" >
        <div class="position-relative min-h-350 bg-color-2" style="background-color: #cccccc;">
            <div class="pl-same-with-container centering-child-vertical w-100 z-10 top-13 tablet-top-50">
                <h2 class="font24 tablet-font36 font-weight-bold pl-1 pr-1 tablet-pr-0 tablet-pl-0">Disclaimer</h2> 
                <p class="font13 tablet-font15 font-weight-reg lineheight-150 pt-2 tablet-max-w-400 desktop-max-w-500 pl-1 pr-1 tablet-pr-0 tablet-pl-0 text-justify pb-7 tablet-pb-0">Please note that this website provides general information only and should not be relied upon fully.</p>
            </div>
            <img src="./img/banner_disclaimer.png" alt="Keys" class="position-absolute bottom-0 max-w-300 tablet-max-w-500 right-0 mr-same-with-container"/>
        </div>
    </section>
    <!-- Start -->
    <section class="container pt-1 tablet-pt-3 overflow-auto">
        <div class="p-05 float-left position-relative m-1 tablet-m-0">
            <div class="w-100 text-center p-2 bg-color-1">
                <p class="lineheight-150 text-justify tablet-w-80 m-auto pb-05">As the financial industry is constantly evolving with new products, regulations and information, there is no guarantee that the information on the website is current.</p>
                <p class="lineheight-150 text-justify tablet-w-80 m-auto pb-05">The website has been prepared without taking into account your objectives, financial situation or needs. It does not constitute legal, tax or financial advice. We recommend that you seek professional advice in relation to your individual circumstances and also consider whether it is appropriate for your circumstances. Your full financial situation will need to be reviewed prior to acceptance of any offer or product.</p>
                <p class="lineheight-150 text-justify tablet-w-80 m-auto pb-05">Hoju Home Loans accepts no responsibility or liability for any direct or indirect loss or damage to any person arising from the use or reliance on the information contained in this website.</p>
            </div>
        </div>
    </section>
    <!-- End -->
    <div class="w-100 min-h-250 mt-3 background-centering mb-4" style="background-image: url(./img/banner_disclaimer_1.jpg);"></div>
    <!-- End Top Banner -->
    <?php include("./_footer.php")?>
    <?php include("./_bottombtns.php")?>
    <script src="./js/_index.js"></script>
</body>
</html> 