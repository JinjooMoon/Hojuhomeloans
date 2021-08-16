<header id="header" class="container-p display-flex bg-color-white tablet-bg-color-transparent align-center justify-spacebetween border-bottom-1 tablet-border-0 min-h-60 position-fixed w-100 z-50">
    <a href="./index.php"><img src="./img/logo.svg" alt="logo" class="max-h-50 pl-1 tablet-pl-0"/></a>
    <!-- Start Tablet version -->
    <div class="display-flex align-center hide-on-mobile">
        <div class="min-h-60 display-flex align-center justify-center"><a href="./index.php" class="p-1 hover-text">Home</a></div>
        <div class="min-h-60 display-flex align-center justify-center"><a href="./about.php" class="p-1 hover-text">About Us</a></div>
        <div class="min-h-60 display-flex align-center justify-center"><a href="./lenders.php" class="p-1 hover-text">Our Lenders</a></div>
        <div class="p-1 dropdown position-relative min-h-60 display-flex align-center justify-center">
            <a href="./service.php" class="hover-text">Services</a>
            <div class="dropdown-content shadow display-none position-absolute bg-color-white min-w-250 z-50 border-top-main top-3 left-85 mt-1">
                <a href="./service-home.php" class="display-flex align-center border-bottom-1 min-h-50">
                    <div class="m-05 dropdown-menu display-flex align-center justify-spacebetween w-100">
                        <div class="display-flex align-center">
                            <img src="./img/iconHome.svg" alt="icon" class="max-w-40 pr-05"/>
                            <p>Home loans</p>
                        </div>
                        <img src="./img/iconArrow.svg" alt="icon" class="max-w-30"/>
                    </div>
                </a>
                <a href="./service-commercial.php" class="display-flex align-center border-bottom-1 min-h-50">
                    <div class="m-05 dropdown-menu display-flex align-center justify-spacebetween w-100">
                        <div class="display-flex align-center">
                            <img src="./img/iconCommercial.svg" alt="icon" class="max-w-40 pr-05"/>
                            <p>Commercial loans</p>
                        </div>
                        <img src="./img/iconArrow.svg" alt="icon" class="max-w-30"/>
                    </div>
                </a>
                <a href="./service-business.php" class="display-flex align-center border-bottom-1 min-h-50">
                    <div class="m-05 dropdown-menu display-flex align-center justify-spacebetween w-100">
                        <div class="display-flex align-center">
                            <img src="./img/iconBusiness.svg" alt="icon" class="max-w-40 pr-05"/>
                            <p>Business loans</p>
                        </div>
                        <img src="./img/iconArrow.svg" alt="icon" class="max-w-30"/>
                    </div>
                </a>
                <a href="./service-personal.php" class="display-flex align-center border-bottom-1 min-h-50">
                    <div class="m-05 dropdown-menu display-flex align-center justify-spacebetween w-100">
                        <div class="display-flex align-center">
                            <img src="./img/iconPersonal.svg" alt="icon" class="max-w-40 pr-05"/>
                            <p>Personal loans</p>
                        </div>
                        <img src="./img/iconArrow.svg" alt="icon" class="max-w-30"/>
                    </div>
                </a>
                <a href="./service-asset.php" class="display-flex align-center border-bottom-1 min-h-50">
                    <div class="m-05 dropdown-menu display-flex align-center justify-spacebetween w-100">
                        <div class="display-flex align-center">
                            <img src="./img/iconAsset.svg" alt="icon" class="max-w-40 pr-05"/>
                            <p>Asset finance</p>
                        </div>
                        <img src="./img/iconArrow.svg" alt="icon" class="max-w-30"/>
                    </div>
                </a>
                <a href="./service-lmi.php" class="display-flex align-center border-bottom-1 min-h-50">
                    <div class="m-05 dropdown-menu display-flex align-center justify-spacebetween w-100">
                        <div class="display-flex align-center">
                            <img src="./img/iconNoLmi.svg" alt="icon" class="max-w-40 pr-05"/>
                            <p>NO LMI home loans</p>
                        </div>
                        <img src="./img/iconArrow.svg" alt="icon" class="max-w-30"/>
                    </div>
                </a>
            </div>
        </div>
        <div class="min-h-60 display-flex align-center justify-center"><a href="./contact.php"  class="p-1 hover-text">Contact</a></div>
    </div>
    <!-- End Tablet version -->
    <!-- Start Mobile version -->
    <div class="hide-on-tablet max-h-60">
        <div class="dropdown">
            <img id="menuButton" src="./img/iconMenu.svg" alt="menu" class="min-w-60 min-h-60 bg-color-main p-1 pointer"/>
            <div id="menuContent" class="dropdown-content display-none position-fixed bg-color-white w-100 z-50 left-0 top-0 h-100vh w-100vw">
                <div class="w-100 display-flex align-center justify-flexend border-bottom-1 pointer">
                    <img id="menuClose" src="./img/iconClose.svg" alt="" class="min-w-60 min-h-60 p-1 bg-color-2"/>
                </div>
                <div class="w-100"><a class="font18 display-block min-h-50 p-1 hover-text" href="./index.php">Home</a></div>
                <div class="w-100"><a class="font18 display-block min-h-50 p-1 hover-text" href="./about.php">About Us</a></div>
                <div class="w-100"><a class="font18 display-block min-h-50 p-1 hover-text" href="./lenders.php">Our Lenders</a></div>
                <div class="w-100 collapsible">
                    <p class="font18 display-block min-h-50 p-1 hover-text pointer">Services</p>
                </div>
                <div class="collapsible-content">
                    <a href="./service-home.php" class="display-flex align-center border-bottom-1 min-h-50">
                        <div class="m-05 dropdown-menu display-flex align-center justify-spacebetween w-100">
                            <div class="display-flex align-center">
                                <img src="./img/iconHome.svg" alt="icon" class="max-w-40 pr-05"/>
                                <p>Home loans</p>
                            </div>
                            <img src="./img/iconArrow.svg" alt="icon" class="max-w-30"/>
                        </div>
                    </a>
                    <a href="./service-commercial.php" class="display-flex align-center border-bottom-1 min-h-50">
                        <div class="m-05 dropdown-menu display-flex align-center justify-spacebetween w-100">
                            <div class="display-flex align-center">
                                <img src="./img/iconCommercial.svg" alt="icon" class="max-w-40 pr-05"/>
                                <p>Commercial loans</p>
                            </div>
                            <img src="./img/iconArrow.svg" alt="icon" class="max-w-30"/>
                        </div>
                    </a>
                    <a href="./service-business.php" class="display-flex align-center border-bottom-1 min-h-50">
                        <div class="m-05 dropdown-menu display-flex align-center justify-spacebetween w-100">
                            <div class="display-flex align-center">
                                <img src="./img/iconBusiness.svg" alt="icon" class="max-w-40 pr-05"/>
                                <p>Business loans</p>
                            </div>
                            <img src="./img/iconArrow.svg" alt="icon" class="max-w-30"/>
                        </div>
                    </a>
                    <a href="./service-personal.php" class="display-flex align-center border-bottom-1 min-h-50">
                        <div class="m-05 dropdown-menu display-flex align-center justify-spacebetween w-100">
                            <div class="display-flex align-center">
                                <img src="./img/iconPersonal.svg" alt="icon" class="max-w-40 pr-05"/>
                                <p>Personal loans</p>
                            </div>
                            <img src="./img/iconArrow.svg" alt="icon" class="max-w-30"/>
                        </div>
                    </a>
                    <a href="./service-asset.php" class="display-flex align-center border-bottom-1 min-h-50">
                        <div class="m-05 dropdown-menu display-flex align-center justify-spacebetween w-100">
                            <div class="display-flex align-center">
                                <img src="./img/iconAsset.svg" alt="icon" class="max-w-40 pr-05"/>
                                <p>Asset finance</p>
                            </div>
                            <img src="./img/iconArrow.svg" alt="icon" class="max-w-30"/>
                        </div>
                    </a>
                    <a href="./service-lmi.php" class="display-flex align-center border-bottom-1 min-h-50">
                        <div class="m-05 dropdown-menu display-flex align-center justify-spacebetween w-100">
                            <div class="display-flex align-center">
                                <img src="./img/iconNoLmi.svg" alt="icon" class="max-w-40 pr-05"/>
                                <p>NO LMI home loans</p>
                            </div>
                            <img src="./img/iconArrow.svg" alt="icon" class="max-w-30"/>
                        </div>
                    </a>
                </div>
                <div class="w-100"><a href='./contact.php' class="font18 display-block min-h-50 p-1 hover-text" href="">Contact</a></div>
            </div>
        </div>
    </div>
        <!-- End Mobile version -->
    </header>